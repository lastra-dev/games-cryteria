<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $this->data['name'] ?></title>
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/game.css" />
  <script src="https://kit.fontawesome.com/ebb32ee94c.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-image: url(<?php echo $this->data['background_image_additional'] ?>);" class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="game-main-section">
    <div class="shadow-chart">
      <div class="column">
        <div class="game-title"><?php echo $this->data['name'] ?></div>
        <div> <?php echo $this->data['description'] ?></div>
        <div class="row">
          <div class="released-date">
            <div class="subtitle">
              Released Date
            </div>
            <div class="date">
              <?php echo $this->data['released'] ?>
            </div>
          </div>
          <div class="share">
            <div class="subtitle">
              Share
            </div>
            <div class="social-icons">
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-twitter-square"></i>
              <i class="fab fa-whatsapp-square"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="where-buy">
            <div class="subtitle">
              Where to buy
            </div>
            <img src="" alt="">
          </div>
          <div class="your-rating">
            <div class="subtitle">
              Rate this game
            </div>
            <form action="<?php echo constant('URL') ?>game/rate?gameId=<?php echo $this->data['id'] ?>" method="POST" class="stars">

              <?php
              for ($i = 1; $i < 6; $i++) {
                if ($i < $this->accRating + 1) {
                  echo "
                    <button id='star{$i}-submit' type='submit' name='submit' value='{$i}'>
                      <i class='fas fa-star checked'></i>
                    </button>";
                } else {
                  echo "
                    <button id='star{$i}-submit' type='submit' name='submit' value='{$i}'>
                      <i class='fas fa-star'></i>
                    </button>";
                }
              }
              ?>

            </form>
            <div class="feedback"><?php echo $this->feedback ?></div>
          </div>
        </div>
      </div>
      <div class="second-column">
        <img width="250px" src="<?php echo $this->data['background_image'] ?>" alt="">
        <div class="gc-rating">
          <div class="subtitle">
            Games Cryteria Rating
          </div>
          <div class="stars">
            <?php
            $checkedStar = "<i class='fas fa-star checked'></i>";
            $star = "<i class='fas fa-star'></i>";
            if ($this->gcRating) {
              $rating = $this->gcRating["rating"];
              echo str_repeat($checkedStar, $rating);
              echo str_repeat($star, 5 - floor($rating));
            } else {
              echo str_repeat($star, 5);
            }
            ?>
          </div>
          <div>
            <?php
            if ($this->gcRating) {
              echo $this->gcRating["rating"];
            } else {
              echo "Not rated yet";
            }
            ?>
          </div>
        </div>
        <div class="metacritic-rating">
          <div class="subtitle">
            Metacritic rating
          </div>
          <div>
            <?php echo $this->data['metacritic'] ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <?php require 'views/footer.php' ?>
  <script src="<?php echo constant('URL') ?>public/js/game.js"></script>
</body>

</html>
