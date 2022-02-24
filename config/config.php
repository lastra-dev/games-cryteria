<?php
if ($_SERVER['HTTP_HOST'] === 'localhost') {
  define('URL', 'http://' . $_SERVER['HTTP_HOST'] . '/games-cryteria/');
} else {
  define('URL', 'https://' . $_SERVER['HTTP_HOST'] . '/');
}

define('HOST', $_ENV['DB_HOST']);
define('DB', $_ENV['DB']);
define('USER', $_ENV['DB_USER']);
define('PASSWORD', $_ENV['DB_PASS']);
define('CHARSET', 'utf8mb4');
