<?php
class Signup extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->render('signup/index');
  }

  function register_account(){
    echo "Account registered";
    $this->model->insert();
  }
}
