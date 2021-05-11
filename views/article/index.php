<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/article.css" />
  <script src="https://kit.fontawesome.com/ebb32ee94c.js" crossorigin="anonymous"></script>
</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="article-section">
    <div class="shadow-chart">
      <h1><?php echo $this->data->title ?></h1>
      <div class="cuerpo">
        <?php
        echo $this->data->body
        ?>
      </div>
      <div class="image">
        <img src="<?php echo $this->data->image ?>" width="50%" alt="">
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
  </section>
  <?php require 'views/footer.php' ?>
</body>

</html>
