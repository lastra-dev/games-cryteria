<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Games Cryteria</title>
  <meta name="description" content="Games Cryteria helps you review a variety of games, learn from them, rate them, and see other people's scores." />
  <meta name="keywords" content="games, rating, videogames, review, game blog">
  <meta name="author" content="Oscar Lastra">

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/contact.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body class="container full-height-grow">
  <?php require 'views/header.php' ?>
  <section class="contact-main-section">
    <form class="shadow-chart">
      <div class="sign-text">Contact us</div>
      <div class="sign-input-group">
        <form action="contact_submit" method="get" accept-charset="utf-8">
          <input type="text" placeholder="Name">
          <input type="email" placeholder="Email">
          <textarea name="message" placeholder="Enter your message.." cols="40" rows="5"></textarea>
          <button type="submit" class="btn">Send Message</button>
        </form>
      </div>
    </form>
  </section>
  <?php require 'views/footer.php' ?>
  <script src="<?php echo constant('URL') ?>public/js/main.js"></script>
</body>

</html>
