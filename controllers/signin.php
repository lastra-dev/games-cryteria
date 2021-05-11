<?php
session_start();
class Signin extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->feedback = "";
  }

  function render()
  {
    $this->view->render('signin/index');
  }

  function login()
  {
    $username = $_POST['username'];
    $password = hash('sha512', $_POST['password']);

    $feedback = "";

    if ($result = $this->model->login([
      'username' => $username,
      'password' => $password
    ])) {
      $feedback = "Succesfully logged in";
      $_SESSION['id'] = $result;
      header('Location: ' . constant('URL') . 'home');
      return;
    } else {
      $feedback = "Incorrect username or password";
    }

    $this->view->feedback = $feedback;
    $this->render();
  }
}
