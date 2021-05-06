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
      <form class="first-row">
        <div>
          <label for="search-input">Rated Games</label>
          <input type="search" placeholder="Search..." name="" id="search-input" />
        </div>
        <div id="filters">
          <label for="filter-toggler">Filter</label>
          <input id="filter-toggler" type="image" src="<?php echo constant('URL') ?>public/img/options.png">
        </div>
      </form>
      <div class="second-row">
        <div class="game">
          <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg" alt="Game Img">
          <span>TEST 1</span>
          <span>5/5</span>
        </div>
        <div class="game">
          <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg" alt="Game Img">
          <span>TEST 2</span>
          <span>5/5</span>
        </div>
        <div class="game">
          <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg" alt="Game Img">
          <span>TEST 3</span>
          <span>5/5</span>
        </div>
        <div class="game">
          <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg" alt="Game Img">
          <span>TEST 4</span>
          <span>5/5</span>
        </div>
        <div class="game">
          <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg" alt="Game Img">
          <span>TEST 5</span>
          <span>5/5</span>
        </div>
        <div class="game">
          <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg" alt="Game Img">
          <span>TEST 6</span>
          <span>5/5</span>
        </div>
        <div class="game">
          <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg" alt="Game Img">
          <span>TEST 7</span>
          <span>5/5</span>
        </div>
        <div class="game">
          <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg" alt="Game Img">
          <span>TEST 8</span>
          <span>5/5</span>
        </div>
      </div>
      <!-- Games Holder 
        <?php
        foreach ($this->games_data['results'] as $game) {
          echo $game['name'];
        }
        ?>-->
    </div>
    </div>
  </section>
  <?php require 'views/footer.php' ?>
</body>

</html>
