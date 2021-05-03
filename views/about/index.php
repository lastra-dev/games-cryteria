<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/about.css" />

</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="about-us-main-section">
    <form class="shadow-chart">
      <div class="sign-text">About us</div>
      <div class="about-us">
        We are a group of friends with a passion for video games, we are
        creating this website in order to have a page where people can share
        and consult information about those video games that interest them,
        or of which they want an extra opinion to decide whether to buy and
        play such games.
        <hr>
        Somos un grupo de amigos con una pasion por los videojuegos,
        estamos creando este sitio web con la finalidad de tener una pagina
        en la que aquellas personas que compartan nuestro gusto puedan consultar
        información acerca de esos videojuegos que les interesen, o de los cuales
        quieran una opinión extra para decidir si comprar y jugar tal juego.
      </div>
    </form>
  </section>
  <?php require 'views/footer.php' ?>
</body>

</html>
