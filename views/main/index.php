<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <title>Games Cryteria</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

  <!-- <link rel="manifest" href="public/site.webmanifest" /> -->
  <link rel="apple-touch-icon" href="icon.png" />
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/index.css" />

  <meta name="theme-color" content="#fafafa" />
</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="landing-main-section">
    <div class="landing-page-chart">
      <h2>Top Rated Games of the year <img src="<?php echo constant('URL') ?>public/img/fire.png" width="25em" alt="fire"></h2>
      <h3>1 <span class="game-title">The Last of Us Part II</span></h3>
      <h3>2 <span class="game-title">Hades</span></h3>
      <h3>3 <span class="game-title">Ghosts of Tsushima</span></h3>
      <h3>4 <span class="game-title">Ori and the Will of the Wisps</span></h3>
      <h3>5 <span class="game-title">Factorio</span></h3>
      <h3>6 <span class="game-title">Animal Crossing: New Horizons</span></h3>
      <h3>7 <span class="game-title">Genshin Impact</span></h3>
    </div>
    <div class="msg-img">
      <div class="call-to-action">
        <h1 class="title">
          Rate and review <span class="games-word">games</span><br />
          in a trusted way.
          <img src="<?php echo constant('URL') ?>public/img/thumbsup.png" width="60em" alt="thumbsup" />
        </h1>
        <a href="<?php echo constant('URL') ?>Home" class="btn">Get Started</a>
      </div>
    </div>
  </section>
  <div class="landing-page-cat"></div>
  <?php require 'views/footer.php' ?>
  <!-- require 'views/analytics.php' ?> -->
</body>

</html>
