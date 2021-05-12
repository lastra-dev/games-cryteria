  <header class="main-header">
    <a href="<?php echo constant('URL') ?>" class="brand-logo">
      <img src="<?php echo constant('URL') ?>public/img/logo.png" width="35" alt="logo" />
      <div class="brand-logo-name">Games Cryteria</div>
    </a>
    <nav class="main-nav">
      <ul>
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
    </nav>
  </header>
