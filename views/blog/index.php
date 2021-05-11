<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/blog.css" />

</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="blog-section">
    <div class="shadow-chart">
      <h1>Blog</h1>
      <h2>Artículos Destacados</h2>
      <hr>
      <ul>
        <li>
          <a href="<?php echo constant('URL') ?>article?artId=0">
            <img src="https://venturebeat.com/wp-content/uploads/2016/06/supermario64.png?w=1200&strip=all" width="200px" alt="">
            Juegos que marcaron infancias
          </a>
        </li>
        <li>
          <a href="<?php echo constant('URL') ?>article?artId=1">
            <img src="https://static01.nyt.com/images/2013/02/12/science/12GAME/12GAME-superJumbo.jpg" width="200px" alt="">
            ¿Que representan los videojuegos hoy en día?
          </a>
        </li>
      </ul>
    </div>
  </section>
  <?php require 'views/footer.php' ?>
</body>

</html>
