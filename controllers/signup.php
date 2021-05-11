<?php
session_start();

class Signup extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->feedback = "";
  }

  function render()
  {
    $this->view->render('signup/index');
  }

  function register_account()
  {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = hash('sha512', $_POST['password']);

    $feedback = "";

    if ($this->model->insert([
      'username' => $username,
      'name' => $name,
      'email' => $email,
      'password' => $password
    ])) {
      $feedback = "Account succesfully registered.";
    } else {
      $feedback = "An account with that username / email already exists.";
    }

    $this->view->feedback = $feedback;
    $this->render();
  }
}
