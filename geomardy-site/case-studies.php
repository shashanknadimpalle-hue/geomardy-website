<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Case Studies - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport case-hero position-relative d-flex align-items-center justify-content-center text-center">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="<?php echo url('assets/videos/case-studies-bg.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">Case Studies</h1>
    <p class="hero-sub fade-up">Proven outcomes in complex environments.</p>
  </div>
</section>

<!-- ===================== FEATURED CASE STUDY CAROUSEL ===================== -->
<section class="section py-5">
  <div class="container text-center">
    <h2 class="mb-4 fade-up">Featured Case Studies</h2>

    <div id="caseCarousel" class="carousel slide fade-up" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">

        <!-- Case 1 -->
        <div class="carousel-item active">
          <div class="card mx-auto p-4 shadow-sm" style="max-width: 720px;">
            <h5 class="fw-bold">Underwater Tracking & Localisation — DPR</h5>
            <p class="small mb-0">Comprehensive DPR for an acoustic buoy network for real-time underwater tracking and target localization.</p>
          </div>
        </div>

        <!-- Case 2 -->
        <div class="carousel-item">
          <div class="card mx-auto p-4 shadow-sm" style="max-width: 720px;">
            <h5 class="fw-bold">Defence Validation Infrastructure</h5>
            <p class="small mb-0">Design and development of Magnetic Signature Management Facility for naval asset stealth validation.</p>
          </div>
        </div>

        <!-- Case 3 -->
        <div class="carousel-item">
          <div class="card mx-auto p-4 shadow-sm" style="max-width: 720px;">
            <h5 class="fw-bold">Asset Intelligence</h5>
            <p class="small mb-0">Deployment of integrated digital situational awareness tools for monitoring high-value maritime infrastructure.</p>
          </div>
        </div>

      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#caseCarousel" data-bs-slide="prev">
        <div class="custom-arrow-circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          </svg>
        </div>
      </button>

      <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#caseCarousel" data-bs-slide="next">
        <div class="custom-arrow-circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </div>
      </button>
    </div>
  </div>
</section>

<!-- ===================== CASE STUDY GRID ===================== -->
<section class="section py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 fade-up">All Case Studies</h2>
    <div class="row g-4">

      <!-- Case 1 -->
      <div class="col-md-4 fade-up">
        <div class="card case-card h-100 shadow-sm">
          <img src="<?php echo url('assets/images/case-lct.jpg'); ?>" class="card-img-top" alt="Large Cavitation Tunnel – NSTL">
          <div class="card-body">
            <h5 class="card-title">Large Cavitation Tunnel – NSTL</h5>
            <p class="card-text">Design and integration of India’s largest naval hydrodynamic testing facility for performance validation.</p>
            <a href="<?php echo url('case-detail.php?slug=large-cavitation-tunnel'); ?>" class="read-more">Read More →</a>
          </div>
        </div>
      </div>

      <!-- Case 2 -->
      <div class="col-md-4 fade-up">
        <div class="card case-card h-100 shadow-sm">
          <img src="<?php echo url('assets/images/case-subsea-cable.jpg'); ?>" class="card-img-top" alt="Subsea Cable DPR – 255 km">
          <div class="card-body">
            <h5 class="card-title">Subsea Cable DPR – 255 km</h5>
            <p class="card-text">End-to-end DPR and marine survey planning for a long-haul fiber optic communication link.</p>
            <a href="<?php echo url('case-detail.php?slug=subsea-cable-dpr'); ?>" class="read-more">Read More →</a>
          </div>
        </div>
      </div>

      <!-- Case 3 -->
      <div class="col-md-4 fade-up">
        <div class="card case-card h-100 shadow-sm">
          <img src="<?php echo url('assets/images/case-buoy-network.jpg'); ?>" class="card-img-top" alt="Acoustic Buoy Network Prototype">
          <div class="card-body">
            <h5 class="card-title">Acoustic Buoy Network Prototype</h5>
            <p class="card-text">GPS-synced hydrophone network for real-time underwater target tracking and localization.</p>
            <a href="<?php echo url('case-detail.php?slug=acoustic-buoy-network'); ?>" class="read-more">Read More →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="division-cta py-5 text-center">
  <div class="container fade-up">
    <h3 class="mb-3">Interested in a Project Like This?</h3>
    <p class="lead mb-4">Reach out to discuss your technical or operational requirement with our team.</p>
    <a href="<?php echo url('contact.php'); ?>" class="btn btn-primary btn-lg">Contact Geomardy</a>
  </div>
</section>

<?php 
require_once __DIR__ . '/inc/footer.php'; 
?>
