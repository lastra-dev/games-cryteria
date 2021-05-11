<?php
class Game extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->gameId = $_GET['gameId'];
    $this->view->data = [];
    $this->view->gcRating = "Not rated yet";
  }

  function render()
  {
    $this->get_game_details($this->gameId);
    $this->get_gc_rating($this->gameId);
    $this->view->render('game/index');
  }

  function get_game_details($gameId)
  {
    $data = $this->model->get_data($gameId);
    $this->view->data = $data;
  }

  function get_gc_rating($gameId)
  {
    $gcRating = $this->model->get_rating($gameId);
    $this->view->gcRating = $gcRating;
  }
}
