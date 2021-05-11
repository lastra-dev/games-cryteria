<?php
session_start();
include_once('models/article_data.php');

class Article extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->data = "";
    $this->articleId = $_GET['artId'];
  }

  function render()
  {
    $this->get_article_data();
    $this->view->render('article/index');
  }

  function get_article_data()
  {
    $articlesData = new Article_data();
    $this->view->data = $articlesData->articles[$this->articleId];
  }
}
