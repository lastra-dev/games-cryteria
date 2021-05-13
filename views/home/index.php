<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Games Cryteria helps you review a variety of games, learn from them, rate them, and see other people's scores." />
  <meta name="keywords" content="games, rating, videogames, review, game blog">

  <title>Games - Games Cryteria</title>

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/home.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <script src="https://kit.fontawesome.com/ebb32ee94c.js" crossorigin="anonymous"></script>
</head>

<body class="container full-height-grow">
  <?php
  require 'views/header.php'
  ?>
  <section class="home-main-section">
    <div class="shadow-chart">
      <form action="<?php echo constant('URL') ?>home/custom_search" class="first-row">
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
            <a href="<?php
                      echo constant('URL') . 'game?gameId=' . $game['id'];
                      ?>">
              <img src="<?php echo $game['background_image'] ?>" alt="Game Image">
            </a>
            <span><?php echo $game['name'] ?></span>
            <span>
              <?php
              $output = "Not rated yet";
              foreach ($this->ratings as $r) {
                if ($r->id == $game['id']) {
                  $rating = $r->rating;
                  $output = 'GC Rating: ' . $rating . '/5';
                  break 1;
                } else {
                  $rating = 0;
                }
              }
              echo $output;
              ?>
            </span>
            <span class="stars">
              <?php
              $checkedStar = "<span class='fas fa-star checked'></span>";
              $star = "<span class='fas fa-star'></span>";
              echo str_repeat($checkedStar, $rating);
              echo str_repeat($star, 5 - floor($rating));
              ?>
            </span>
          </div>
        <?php  } ?>
      </div>
      <div id="rawg">Powered by RAWG</div>
    </div>
    </div>
  </section>
  <?php require 'views/footer.php' ?>
</body>

</html>
