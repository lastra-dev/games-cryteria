<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Games Cryteria helps you review a variety of games, learn from them, rate them, and see other people's scores." />
  <meta name="keywords" content="games, rating, videogames, review, game blog">
  <meta name="author" content="Oscar Lastra">

  <title>Blog - Games Cryteria</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/blog.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
  <?php require 'views/header.php' ?>
  <section id="container">
    <div class="blog-main-section main">
      <div class="shadow-chart">
        <h1>Blog</h1>
        <h2>Artículos Destacados</h2>
        <hr>
        <ul class="articles">
          <li>
            <a class="art" href="<?php echo constant('URL') ?>article?artId=0">
              <img src="https://venturebeat.com/wp-content/uploads/2016/06/supermario64.png?w=1200&strip=all" width="150px" alt="Super Mario 64">
              Juegos que marcaron infancias
            </a>
          </li>
          <li>
            <a class="art" href="<?php echo constant('URL') ?>article?artId=1">
              <img src="https://static01.nyt.com/images/2013/02/12/science/12GAME/12GAME-superJumbo.jpg" width="150px" alt="Game Psychology">
              ¿Que representan los videojuegos hoy en día?
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <?php require 'views/footer.php' ?>
  <script src="<?php echo constant('URL') ?>public/js/main.js"></script>
</body>

</html>
