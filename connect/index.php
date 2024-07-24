<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/layout.html', [
  'pageTitle' => 'Connect - Small Screen Superman', 
  'contentTitle' => "Connect",
]);
?>