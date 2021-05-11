<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/error.css" />

</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="error-section">
    <div class="game-over">GAME<br>OVER!</div>
    <div class="call-to-action">
      <h1>Sorry! page not found</h1>
      <a href="<?php echo constant('URL') ?>" class="btn">Back to start</a>
    </div>
  </section>
  <div class="error-page-hand"></div>
  <?php require 'views/footer.php' ?>
</body>

</html>
