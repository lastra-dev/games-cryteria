<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $this->data->description ?>" />
  <meta name="keywords" content="<?php echo $this->data->keywords ?>">
  <meta name="author" content="<?php echo $this->data->author ?>">

  <title><?php echo $this->data->title ?> - Games Cryteria</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/article.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <script src="https://kit.fontawesome.com/ebb32ee94c.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require 'views/header.php' ?>
  <section id="container">
    <div class="article-main-section main">
      <div class="shadow-chart ">
        <h1 class="art-title"><?php echo $this->data->title ?></h1>
        <div class="art-body">
          <?php
          echo $this->data->body
          ?>
        </div>
        <div class="image">
          <img src="<?php echo $this->data->image ?>" width="50%" alt="Blog image">
        </div>
        <div class="share">
          <div class="subtitle"> Share </div>
          <div class="social-icons">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-whatsapp-square"></i>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require 'views/footer.php' ?>
  <script src="<?php echo constant('URL') ?>public/js/main.js"></script>
</body>

</html>
