<?php
session_start();

class Game extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->gameId = $_GET['gameId'];
    $this->view->data = [];
    $this->view->gcRating = "Not rated yet";
    $this->view->feedback = "";
    $this->view->accRating = 0;
  }

  function render()
  {
    $this->get_game_details($this->gameId);
    $this->get_gc_rating($this->gameId);
    $this->get_acc_rating();
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

  function rate()
  {
    $rating = $_POST['submit'];
    $feedback = "";

    if ($this->model->set_rating([
      'gameId' => $this->gameId,
      'rating' => $rating
    ])) {
      $feedback = "Succesfully rated!";
    } else {
      $feedback = "There was an error with your submition.";
    }
    $this->view->feedback = $feedback;
    $this->render();
  }

  function get_acc_rating()
  {
    if ($row = $this->model->get_user_rating([
      'gameId' => $this->gameId
    ])) {
      $result = $row['rating'];
      $this->view->accRating = $result;
    }
  }
}
