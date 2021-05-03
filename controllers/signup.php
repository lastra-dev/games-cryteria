<?php
class Signup extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->render('signup/index');
  }

  function register_account()
  {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = hash('sha512', $_POST['password']);

    if ($this->model->insert([
      'username' => $username,
      'name' => $name,
      'email' => $email,
      'password' => $password
    ])) {
      echo "Account succesfully registered.";
    } else {
      echo "An account with that username / email already exists.";
    }
  }
}
