<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/layout.html', [
  'pageTitle' => 'Fan Graphics - Small Screen Superman', 
  'contentTitle' => "Superman Fan-Made Graphics",
]);
?>