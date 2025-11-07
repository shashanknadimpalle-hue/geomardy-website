<?php
require_once __DIR__ . '/../config.php';
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'] ?? '',
        'secure' => false,
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    session_start();
}

function db_connect(){
    static $pdo = null;
    if ($pdo) return $pdo;
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHAR;
    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        return $pdo;
    } catch (PDOException $e) {
        if (DEBUG) echo "DB Connect Error: " . $e->getMessage();
        return null;
    }
}

function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function url($path = ''){
    $base = BASE_URL;
    $path = ltrim($path, '/');
    return $base . ($path === '' ? '' : $path);
}

function csrf_token(){
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        $_SESSION['csrf_token_time'] = time();
    }
    return $_SESSION['csrf_token'];
}
function csrf_field(){
    $t = csrf_token();
    return '<input type="hidden" name="csrf_token" value="'.e($t).'">';
}
function csrf_check($token){
    if (empty($_SESSION['csrf_token']) || !$token) return false;
    if (hash_equals($_SESSION['csrf_token'], $token) && (time() - ($_SESSION['csrf_token_time'] ?? 0) < 3600)) return true;
    return false;
}

function sanitize_text($s){ return trim(filter_var($s, FILTER_SANITIZE_STRING)); }
function sanitize_email($s){ return filter_var($s, FILTER_SANITIZE_EMAIL); }

function rate_limit_check($key, $limit = 5, $period = 60){
    $now = time();
    if (!isset($_SESSION['rl'])) $_SESSION['rl'] = [];
    if (!isset($_SESSION['rl'][$key])) $_SESSION['rl'][$key] = [];
    $_SESSION['rl'][$key] = array_filter($_SESSION['rl'][$key], function($t) use ($now, $period){
        return ($now - $t) < $period;
    });
    if (count($_SESSION['rl'][$key]) >= $limit) return false;
    $_SESSION['rl'][$key][] = $now;
    return true;
}

function handle_upload($file){
    if (!isset($file) || $file['error'] === UPLOAD_ERR_NO_FILE) return null;
    if ($file['error'] !== UPLOAD_ERR_OK) return null;
    if ($file['size'] > MAX_UPLOAD) return null;
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($file['tmp_name']);
    $allowed = [
        'application/pdf' => 'pdf',
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'application/zip' => 'zip'
    ];
    if (!array_key_exists($mime, $allowed)) return null;
    $ext = $allowed[$mime];
    $name = bin2hex(random_bytes(12)) . '.' . $ext;
    if (!is_dir(UPLOAD_DIR)) mkdir(UPLOAD_DIR, 0755, true);
    $dest = rtrim(UPLOAD_DIR,'/') . '/' . $name;
    if (!move_uploaded_file($file['tmp_name'], $dest)) return null;
    return $name;
}

function save_contact(array $data){
    $pdo = db_connect();
    if (!$pdo) return false;
    $sql = "INSERT INTO contacts (name, org, email, phone, project_type, message, filename, created_at)
            VALUES (:name, :org, :email, :phone, :project_type, :message, :filename, NOW())";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        ':name' => $data['name'],
        ':org' => $data['org'],
        ':email' => $data['email'],
        ':phone' => $data['phone'],
        ':project_type' => $data['project_type'],
        ':message' => $data['message'],
        ':filename' => $data['filename']
    ]);
}

function send_contact_email($subject, $body, $replyTo = null, $attachmentPath = null)
{
    $smtp = $GLOBALS['ENV']['smtp'] ?? [];
    $mailTo = $GLOBALS['ENV']['mail_to'] ?? 'info@geomardy.com';
    $from = $smtp['user'] ?? 'no-reply@geomardy.com';

    if (!empty($smtp['host'])) {
        require_once __DIR__ . '/../vendor/phpmailer/autoload.php';
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = $smtp['host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $smtp['user'];
            $mail->Password   = $smtp['pass'];
            $mail->SMTPSecure = $smtp['secure'] ?? 'tls';
            $mail->Port       = $smtp['port'] ?? 587;

            $mail->setFrom($from, 'Geomardy Website');
            $mail->addAddress($mailTo);
            if ($replyTo) $mail->addReplyTo($replyTo);

            if ($attachmentPath && file_exists($attachmentPath)) {
                $mail->addAttachment($attachmentPath);
            }

            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body    = $body;

            $mail->send();
            return true;
        } catch (Exception $e) {
            if (DEBUG) error_log("Mailer Error: " . $mail->ErrorInfo);
            return false;
        }
    } else {
        // fallback to PHP mail()
        $headers = "From: $from\r\n";
        if ($replyTo) $headers .= "Reply-To: $replyTo\r\n";
        mail($mailTo, $subject, $body, $headers);
    }
}

