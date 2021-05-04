<?php
class Errors extends Controller
{
  function __construct()
  {
    parent::__construct();
    // echo "<p>Error</p>";
    $this->view->render('error/index');
  }
}
