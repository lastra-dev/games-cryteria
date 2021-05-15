<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Games Cryteria helps you review a variety of games, learn from them, rate them, and see other people's scores." />
  <meta name="keywords" content="games, rating, videogames, review, game blog">

  <title>Sign In - Games Cryteria</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/sign-in.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
  <?php require 'views/header.php' ?>
  <section id="container">
    <div class="signin-main-section main">
      <div class="fav-games-message">
        Start rating your<br />favorite games!
      </div>
      <form action="<?php echo constant('URL') ?>signin/login" method="POST" class="shadow-chart">
        <div class="sign-text">Sign in to Games Cryteria</div>
        <div><?php echo $this->feedback ?></div>
        <div class="sign-input-group">
          <button type="submit" class="btng">
            <img src="<?php echo constant('URL') ?>public/img/googleicon.png" alt="Google Icon" />
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
    </div>
  </section>
  <?php require 'views/footer.php' ?>
  <script src="<?php echo constant('URL') ?>public/js/main.js"></script>
</body>

</html>
