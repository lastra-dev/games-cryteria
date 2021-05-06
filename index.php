<?php
require_once 'vendor/autoload.php';
require_once 'libs/Database.php';
require_once 'libs/Controller.php';
require_once 'libs/Model.php';
require_once 'libs/View.php';
require_once 'libs/App.php';
require_once 'config/config.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$app = new App();
