<?php

use Rawg\ApiClient;
use Rawg\Config;
use Rawg\DateRange;
use Rawg\Filters\GamesFilter;

class Home extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->render('home/index');
  }
}
