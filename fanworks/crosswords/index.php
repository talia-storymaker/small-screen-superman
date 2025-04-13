<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/layout.html', [
  'pageTitle' => 'Crosswords - Small Screen Superman', 
  'contentTitle' => "Superman Crosswords",
  'description' => "Test your Superman knowledge with these fun crossword puzzles. You can play them online or print them out."
]);
?>