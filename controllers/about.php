<?php
session_start();

class About extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->render('about/index');
  }
}
