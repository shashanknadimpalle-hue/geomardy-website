<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Case Detail - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
?>

<section class="section py-5">
  <div class="container fade-up">
    <h2>Underwater Tracking & Localisation — DPR</h2>
    <p><strong>Client:</strong> Confidential (Defence Sector)</p>

    <h4 class="mt-4">Challenge</h4>
    <p>Developing a scalable underwater tracking system capable of real-time localisation with minimal infrastructure and high accuracy in dynamic conditions.</p>

    <h4 class="mt-4">Geomardy Approach</h4>
    <p>Deployed GPS-synced acoustic buoys integrated with advanced signal processing and environmental modeling to ensure robust tracking and precision analytics.</p>

    <h4 class="mt-4">Outcome / Metrics</h4>
    <ul>
      <li>Achieved sub-meter accuracy in positioning.</li>
      <li>Reduced operational latency by 40% through distributed processing.</li>
      <li>Validated for multi-environment use (harbor, open sea).</li>
    </ul>

    <h4 class="mt-4">Tech Stack & Deliverables</h4>
    <p>USBL arrays, acoustic modems, real-time processing engine, visualization dashboard, and system documentation compliant with S1000D standards.</p>

    <h4 class="mt-4">Gallery</h4>
    <div class="row g-3 mt-2">
      <div class="col-md-4"><img src="<?php echo url('assets/images/case-buoy1.jpg'); ?>" class="img-fluid rounded"></div>
      <div class="col-md-4"><img src="<?php echo url('assets/images/case-buoy2.jpg'); ?>" class="img-fluid rounded"></div>
      <div class="col-md-4"><img src="<?php echo url('assets/images/case-buoy3.jpg'); ?>" class="img-fluid rounded"></div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
