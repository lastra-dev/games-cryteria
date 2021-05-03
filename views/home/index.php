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
        <div>
          <label for="filter">Filter</label>
          <button class="filter-toggler" type="button" data-toggle="collapse" data-target="#filterSupportedContent" aria-controls="filterSupportedContent" aria-expanded="false" aria-label="Toggle filter">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </form>
      <div class="second-row">
        <!-- Games Holder -->
      </div>
    </div>
  </section>
  <?php require 'views/footer.php' ?>
</body>

</html>
