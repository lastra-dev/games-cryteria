  <header>
    <nav>
      <a href="<?php echo constant('URL') ?>" class="brand-logo">
        <img src="<?php echo constant('URL') ?>public/img/logo.png" width="33" alt="logo" />
        <div class="brand-logo-name">Games Cryteria</div>
      </a>
      <ul class="nav-links">
        <li><a href="<?php echo constant('URL') ?>home">Home</a></li>
        <li><a href="<?php echo constant('URL') ?>blog">Blog</a></li>
        <li><a target="_blank" href="https://discord.gg/fea98vxckk">Discord</a></li>
        <?php
        if (isset($_SESSION['id'])) {
        ?>
          <li><a href="<?php echo constant('URL') ?>signout">Sign Out</a></li>
        <?php  } else { ?>
          <li><a href="<?php echo constant('URL') ?>signin">Sign In</a></li>
          <li><a href="<?php echo constant('URL') ?>signup">Sign Up</a></li>
        <?php } ?>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
  </header>
