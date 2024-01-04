<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/layout.html', [
  'pageTitle' => 'Crosswords - Small Screen Superman', 
  'contentTitle' => "Superman Crosswords",
  'content' => file_get_contents('index-contents.html'),
]);
?>