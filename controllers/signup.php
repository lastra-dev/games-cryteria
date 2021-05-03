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

    $this->model->insert([
      'username' => $username,
      'name' => $name,
      'email' => $email,
      'password' => $password
    ]);
  }
}
