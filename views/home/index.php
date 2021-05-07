<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/home.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
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
            <img src="<?php echo $game['background_image'] ?>" alt="Game Img">
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
              $checkedStar = "<span class='fa fa-star checked'></span>";
              $star = "<span class='fa fa-star'></span>";
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
