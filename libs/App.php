<?php
require_once 'controllers/errors.php';

class App
{
  function __construct()
  {
    $url = $this->get_current_url();
    $controller_archive = $this->get_controller_archive_from($url);
    $controller_class = $this->get_controller_name_from($url);

    if (empty($controller_class)) {
      $controller_archive = 'controllers/main.php';
      require_once $controller_archive;
      $controller = new Main();
      $controller->load_model($controller_class);
      return;
    }

    if (file_exists($controller_archive)) {
      require_once $controller_archive;

      $controller = new $controller_class;
      $controller->load_model($controller_class);

      $controller_method = $this->get_method_name_from($url);
      if (isset($controller_method)) {
        $controller->{$controller_method}();
      }
    } else {
      $controller = new Errors();
    }
  }

  private function get_controller_archive_from($url)
  {
    $controller_name = $this->get_controller_name_from($url);
    $controller_archive = 'controllers/' . $controller_name . '.php';
    return $controller_archive;
  }

  private function get_current_url()
  {
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    return $url;
  }

  private function get_controller_name_from($url)
  {
    $controller_name = $url[0];
    return $controller_name;
  }

  private function get_method_name_from($url)
  {
    $method_name = $url[1];
    return $method_name;
  }
}
