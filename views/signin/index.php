<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign in</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/sign-in.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="signin-main-section">
    <div class="fav-games-message">
      Start rating your<br />favorite games!
    </div>
    <form action="<?php echo constant('URL') ?>signin/login" method="POST" class="shadow-chart">
      <div class="sign-text">Sign in to Games Cryteria</div>
      <div><?php echo $this->feedback ?></div>
      <div class="sign-input-group">
        <button type="submit" class="btng">
          <img src="<?php echo constant('URL') ?>public/img/googleicon.png" alt="" />
          Sign in with Google
        </button>
      </div>
      <div class="separator">Or</div>
      <div class="sign-input-group">
        <input type="text" placeholder="Username" name="username" />
        <input type="password" placeholder="Password" name="password" />
        <button type="submit" class="btn">Sign In</button>
      </div>
    </form>
  </section>
  <?php require 'views/footer.php' ?>
</body>

</html>
