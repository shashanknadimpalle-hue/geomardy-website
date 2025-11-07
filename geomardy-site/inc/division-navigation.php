<?php
?>
<nav class="nav nav-pills my-3">
  <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'solutions-division-i.php') echo 'active'; ?>" href="<?php echo url('solutions-division-i.php'); ?>">Division I</a>
  <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'solutions-division-ii.php') echo 'active'; ?>" href="<?php echo url('solutions-division-ii.php'); ?>">Division II</a>
</nav>
