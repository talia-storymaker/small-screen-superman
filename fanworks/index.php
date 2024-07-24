<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/layout.html', [
  'pageTitle' => 'Fanworks - Small Screen Superman', 
  'contentTitle' => "Superman Fanworks",
]);
?>