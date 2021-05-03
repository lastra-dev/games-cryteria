<?php
class Controller
{
  function __construct()
  {
    $this->view = new View();
  }

  function load_model($model)
  {
    $url = 'models/' . $model . '_model.php';

    if (file_exists($url)) {
      require $url;
      $model_name = $model . '_model';
      $this->model = new $model_name();
    }
  }
}
