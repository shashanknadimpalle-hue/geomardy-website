<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'About - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
?>

<!-- ===================== HERO SECTION (with background video) ===================== -->
<section class="hero-viewport about-hero position-relative d-flex align-items-center justify-content-center text-center">
  <?php 
  $videos = $GLOBALS['ENV']['hero_videos'] ?? [];
  $about_video = $videos[1] ?? null; // You can specify a separate video for About page
  ?>
  <?php if($about_video && file_exists(__DIR__ . '/' . $about_video)): ?>
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="<?php echo url($about_video); ?>" type="video/mp4">
    </video>
  <?php else: ?>
    <div class="hero-bg" style="background:url('<?php echo url('assets/images/ocean-hero.jpg'); ?>') center/cover no-repeat; position:absolute; inset:0; z-index:0;"></div>
  <?php endif; ?>
  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">About Geomardy</h1>
    <p class="hero-sub fade-up mb-0">
      Strategic technology enterprise at the intersection of marine science, systems engineering & digital intelligence.
    </p>
  </div>
</section>


<!-- ===================== CORPORATE VISION ===================== -->
<section class="section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="section-heading text-center mb-4 fade-up">Corporate Vision</h2>
        <p class="fade-up">
          Geomardy is a strategic technology enterprise shaping the next generation of maritime and defence infrastructure.
          Positioned at the intersection of engineering, digital intelligence, and systems integration, Geomardy serves as a field enabler — connecting complex operational needs with the right technological and infrastructural solutions.
        </p>
        <p class="fade-up">
          At its core, Geomardy stands for a philosophy of “field relevance through technology intelligence.”
          Every solution, whether digital or physical, is engineered to perform in the real world — where precision, reliability, and situational awareness define success.
        </p>
        <p class="fade-up">
          Our work is guided by the belief that sovereign capability is not built through isolated innovation, but through connected ecosystems.
          We act as the bridge between mission requirements and enabling technologies, supporting defence and research organizations, industry partners, and innovators to deliver solutions that endure in demanding operational environments.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- ===================== CORE PHILOSOPHY ===================== -->
<section class="section bg-light py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="section-heading text-center mb-4 fade-up">Core Philosophy</h2>
        <p class="fade-up">
          At the heart of Geomardy’s operations lies a simple yet powerful idea:
          To be a trusted field partner—whether on the battlefield, in the ocean, or in the field of research—enabling organizations to operate with precision, confidence, and independence.
        </p>
        <p class="fade-up">
          This philosophy drives Geomardy’s efforts to design and deliver systems that not only meet technical specifications but also embody long-term strategic relevance and sustainability.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- ===================== STRATEGIC ARCHITECTURE ===================== -->
<section class="section py-5 strategic-architecture">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-10 text-center">
        <h2 class="section-heading mb-4 fade-up">Strategic Architecture</h2>
        <p class="fade-up">
          Geomardy’s structure is organized into two synergistic divisions — each built to address distinct yet interdependent domains of modern defence and maritime systems.
          These divisions together reflect Geomardy’s role as both a technology integrator and a catalyst — capable of transforming ideas and requirements into deployable systems, from digital architectures to underwater platforms.
        </p>
      </div>
    </div>

    <div class="row g-4 text-center">
      <div class="col-md-6 fade-up">
        <div class="division-card p-4 h-100">
          <h4 class="fw-bold mb-3 text-uppercase">Division I</h4>
          <p class="small mb-4">Marine Investigations & Intelligence</p>
          <a href="<?php echo url('solutions-division-i.php'); ?>" class="btn btn-outline-contrast px-4">Explore Division I</a>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="division-card p-4 h-100">
          <h4 class="fw-bold mb-3 text-uppercase">Division II</h4>
          <p class="small mb-4">Defence Systems & Strategic Technologies</p>
          <a href="<?php echo url('solutions-division-ii.php'); ?>" class="btn btn-outline-contrast px-4">Explore Division II</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ===================== METRICS PANEL ===================== -->
<section class="section py-5 bg-dark text-light metrics-panel">
  <div class="container">
    <div class="row text-center g-4 justify-content-center">
      <div class="col-6 col-md-3 fade-up">
        <h2 class="metric-number text-white">1000+</h2>
        <p class="metric-label text-light">Projects Delivered</p>
      </div>
      <div class="col-6 col-md-3 fade-up">
        <h2 class="metric-number text-white">25+</h2>
        <p class="metric-label text-light">Years of Experience</p>
      </div>
      <div class="col-6 col-md-3 fade-up">
        <h2 class="metric-number text-white">Neutral</h2>
        <p class="metric-label text-light">Technology-Agnostic Solutions</p>
      </div>
      <div class="col-6 col-md-3 fade-up">
        <h2 class="metric-number text-white">Global</h2>
        <p class="metric-label text-light">Sustainable Ecosystem</p>
      </div>
    </div>
  </div>
</section>


<!-- ===================== FOOTER CTA (already exists) ===================== -->
<?php 
require_once __DIR__.'/inc/footer-cta.php'; 
require_once __DIR__.'/inc/footer.php'; 
?>
