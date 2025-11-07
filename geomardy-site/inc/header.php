<?php
require_once __DIR__ . '/functions.php';
$videos = $GLOBALS['ENV']['hero_videos'] ?? [];
$hero_video = $videos[0] ?? null;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo e($pageTitle ?? SITE_NAME); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo url('assets/css/style.css'); ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-sticky">
  <div class="container">
    <a class="navbar-brand text-dark" href="<?php echo url(''); ?>"><?php echo e(SITE_NAME); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link text-dark" href="<?php echo url(''); ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="<?php echo url('about.php'); ?>">About</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link text-dark dropdown-toggle" href="#" id="solutionsMenu" role="button" data-bs-toggle="dropdown">Divisions</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo url('solutions-division-i.php'); ?>">Division I - Marine Investigations & Intelligence</a></li>
            <li><a class="dropdown-item" href="<?php echo url('solutions-division-ii.php'); ?>">Division II - Defence Systems & Strategic Technologies</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link text-dark" href="<?php echo url('capabilities.php'); ?>">Capabilities</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="<?php echo url('case-studies.php'); ?>">Case Studies</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="<?php echo url('ecosystem.php'); ?>">Ecosystem</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="<?php echo url('insights.php'); ?>">Insights</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="<?php echo url('contact.php'); ?>">Contact</a></li>
      </ul>
      <div class="d-flex">
        <a class="btn btn-outline-primary me-2" href="<?php echo url('contact.php'); ?>">Request Project Brief</a>
      </div>
    </div>
  </div>
</nav>

<main class="container mt-4">
