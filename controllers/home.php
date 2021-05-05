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
    $this->view->games_data = [];
    // $this->show_games();
  }

  function render()
  {
    $this->view->render('home/index');
  }

  function show_games()
  {
    $client = $this->prepare_api();
    $gamesFilter = (new GamesFilter())
      ->setDates([
        DateRange::create(new DateTime('2020-01-01'), new DateTime('2021-01-01'))
      ])
      ->setOrdering('-metacritic')
      ->setTags([1, 2, 3]);

    $data = $client->games()->getGames($gamesFilter)->getData();
    $this->view->games_data = $data;
  }

  private function prepare_api()
  {
    $cfg = new Config($_ENV['RAWG_KEY'], 'en');
    return new ApiClient($cfg);
  }
}
