<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Home - ' . SITE_NAME; 
$videos = $GLOBALS['ENV']['hero_videos'] ?? []; 
$hero_video = $videos[0] ?? null; 
require_once __DIR__ . '/inc/header.php'; 
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport position-relative">
  <?php if($hero_video && file_exists(__DIR__ . '/' . $hero_video)): ?>
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="<?php echo url($hero_video); ?>" type="video/mp4">
    </video>
  <?php else: ?>
    <div style="background:url('<?php echo url('assets/images/ocean-hero.jpg'); ?>') center/cover no-repeat; position:absolute; inset:0; z-index:0;"></div>
  <?php endif; ?>

  <div class="hero-overlay"></div>

  <div class="container position-relative hero-content text-center py-5">
    <h1 class="hero-title fade-up mb-4">
      Geomardy — Strengthening Maritime Sovereignty Through Innovation
    </h1>

    <p class="hero-sub fade-up mb-3">
      Where science, engineering, and intelligence converge to build capability.
    </p>

    <!-- boxed support line for guaranteed visibility -->
    <div class="hero-support-box fade-up mb-4">
      <span class="hero-support">
        Geomardy integrates science, engineering, and intelligence to develop next-generation maritime and subsea systems.
      </span>
    </div>

    <div class="hero-buttons fade-up">
      <a class="btn btn-primary btn-lg me-3 px-4 py-2" href="<?php echo url('contact.php'); ?>">Request Project Proposal</a>
      <a class="btn btn-outline-contrast btn-lg px-4 py-2" href="<?php echo url('capabilities.php'); ?>">Explore Capabilities</a>
    </div>
  </div>
</section>

<!-- ===================== QUICK VALUE STRIP ===================== -->
<section class="section py-5 bg-light text-center">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 p-4 border-0 shadow-sm fade-up">
          <h5 class="fw-bold mb-2">Investigation</h5>
          <p>High-fidelity marine, geotechnical & environmental surveys</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 p-4 border-0 shadow-sm fade-up">
          <h5 class="fw-bold mb-2">Simulation</h5>
          <p>Digital twins with intelligence for real-time decision support</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 p-4 border-0 shadow-sm fade-up">
          <h5 class="fw-bold mb-2">Deploy</h5>
          <p>Turnkey solutions: Subsea Networks, UDA, Testing Infrastructure, & Digital Infrastructure</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== DIVISIONS SECTION ===================== -->
<section class="section divisions py-5">
  <div class="container">
    <h3 class="text-center mb-5">Our Divisions</h3>
    <div class="row g-4 align-items-stretch">
      
      <!-- Division I -->
      <div class="col-md-6">
        <div class="division-card h-100 text-center fade-up p-5">
          <h4 class="fw-bold mb-3 text-uppercase">Division I</h4>
          <p class="small mb-4">
            Focused on marine investigations, underwater technologies, and subsea systems — enabling capability creation across naval and strategic sectors.
          </p>
          <a href="<?php echo url('solutions-division-i.php'); ?>" class="btn btn-outline-contrast px-4">Explore Division I</a>
        </div>
      </div>

      <!-- Division II -->
      <div class="col-md-6">
        <div class="division-card h-100 text-center fade-up p-5">
          <h4 class="fw-bold mb-3 text-uppercase">Division II</h4>
          <p class="small mb-4">
            Dedicated to engineering, design, and construction of maritime infrastructure — from testing facilities to subsea networks and digital infrastructure.
          </p>
          <a href="<?php echo url('solutions-division-ii.php'); ?>" class="btn btn-outline-contrast px-4">Explore Division II</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FEATURED CAPABILITIES BAR ===================== -->
<section class="featured-capabilities py-4 text-center">
  <div class="container d-flex justify-content-center flex-wrap gap-4">
    <div class="cap-item"><i class="bi bi-cpu me-2"></i>Edge AI</div>
    <div class="cap-item"><i class="bi bi-water me-2"></i>UDA</div>
    <div class="cap-item"><i class="bi bi-diagram-3 me-2"></i>Subsea Networks</div>
    <div class="cap-item"><i class="bi bi-globe2 me-2"></i>Digital Twins</div>
    <div class="cap-item"><i class="bi bi-shield-lock me-2"></i>Stealth</div>
  </div>
</section>

<!-- ===================== SPOTLIGHT / CASE STUDY CAROUSEL ===================== -->
<section class="section py-5">
  <div class="container text-center">
    <h3 class="mb-4">Spotlight Projects</h3>
    <div id="caseCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="card mx-auto p-4 shadow-sm" style="max-width:600px;">
            <h5>Underwater Tracking & Localisation — DPR</h5>
            <p class="small mb-0">Comprehensive DPR for an acoustic buoy network for real-time underwater tracking.</p>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card mx-auto p-4 shadow-sm" style="max-width:600px;">
            <h5>Defence Validation Infrastructure</h5>
            <p class="small mb-0">Design and development of Magnetic Signature Management Facility for naval assets.</p>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card mx-auto p-4 shadow-sm" style="max-width:600px;">
            <h5>Asset Intelligence</h5>
            <p class="small mb-0">Developing digital situational awareness for high-value maritime infrastructure.</p>
          </div>
        </div>
      </div>

      <!-- custom visible arrows with SVG -->
      <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#caseCarousel" data-bs-slide="prev" aria-label="Previous">
        <span class="custom-arrow-circle" aria-hidden="true">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 6 L9 12 L15 18" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
      </button>

      <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#caseCarousel" data-bs-slide="next" aria-label="Next">
        <span class="custom-arrow-circle" aria-hidden="true">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6 L15 12 L9 18" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
      </button>
    </div>
  </div>
</section>

<!-- ===================== FOOTER CTA ===================== -->
<?php 
require_once __DIR__.'/inc/footer-cta.php'; 
require_once __DIR__.'/inc/footer.php'; 
?>
