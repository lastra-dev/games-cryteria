<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/home.css" />
</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="home-main-section">
    <div class="shadow-chart">
      <form action="<?php echo constant('URL') ?>home/search_games" class="first-row">
        <div>
          <label for="search-input">Rated Games</label>
          <input type="search" placeholder="Search..." name="search" id="search-input" />
        </div>
        <div id="filters">
          <label for="filter-toggler">Filter</label>
          <input id="filter-toggler" type="image" src="<?php echo constant('URL') ?>public/img/options.png">
        </div>
      </form>
      <div class="second-row">
        <?php
        foreach ($this->games_data['results'] as $game) {
        ?>
          <div class="game">
            <img src="<?php echo $game['background_image'] ?>" alt="Game Img">
            <span><?php echo $game['name'] ?></span>
            <span>5/5</span>
          </div>
        <?php  } ?>
      </div>
      <!-- Games Holder 
        -->
    </div>
    </div>
  </section>
  <?php require 'views/footer.php' ?>
</body>

</html>
