<?php
class Signin extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->render('signin/index');
  }
}
