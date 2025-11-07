</main>

<footer class="py-5" style="background: linear-gradient(180deg,#d7eef6,#eaf6fa); color:#042033;">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Section -->
      <div class="col-md-6 mb-3 mb-md-0">
        <strong><?php echo e(SITE_NAME); ?></strong>
        <p class="small mt-2 mb-0">
          © <?php echo date('Y'); ?> <?php echo e(SITE_NAME); ?>. All rights reserved.
        </p>
      </div>

      <!-- Right Section -->
      <div class="col-md-6 text-md-end">
        <a href="<?php echo url('legal.php'); ?>" class="small text-decoration-none me-2">Privacy</a>
        &nbsp;|&nbsp;
        <a 
          href="https://in.linkedin.com/in/srinivasa-raju-jampana-32634417" 
          class="small text-decoration-none ms-2" 
          target="_blank" 
          rel="noopener noreferrer"
        >
          LinkedIn
        </a>
      </div>

    </div>
  </div>
</footer>

<!-- ===================== JS INCLUDES ===================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo url('assets/js/main.js'); ?>"></script>
<script src="<?php echo url('assets/js/hero-video.js'); ?>"></script>

</body>
</html>
