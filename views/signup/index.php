<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Games Cryteria helps you review a variety of games, learn from them, rate them, and see other people's scores." />
  <meta name="keywords" content="games, rating, videogames, review, game blog">
  <meta name="author" content="Oscar Lastra">

  <title>Sign Up - Games Cryteria</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/sign-up.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="signup-main-section">
    <form method="POST" action="<?php echo constant('URL') ?>signup/register_account" class="shadow-chart">
      <div class="sign-text">Sign up to Games Cryteria</div>
      <div class="feedback"><?php echo $this->feedback ?></div>
      <div class="sign-input-group">
        <button type="submit" class="btng"> <img src="<?php echo constant('URL') ?>public/img/googleicon.png" alt="Google Icon">
          Sign up with Google
        </button>
      </div>
      <div class="separator">Or</div>
      <div class="name-input-group">
        <input type="text" placeholder="Name" name="name" required>
        <input type="text" placeholder="Username" name="username" required>
      </div>
      <div class="sign-input-group">
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
      </div>
      <div class="terms">
        <input type="checkbox" required>
        You're okay with our
        <a href="">Terms of Services</a> and <a href="">Privacy Policy</a>
      </div>
      <button type="submit" class="btn">Sign up</button>
    </form>
  </section>
  <?php require 'views/footer.php' ?>
</body>

</html>
