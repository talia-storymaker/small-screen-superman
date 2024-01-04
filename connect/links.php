<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/layout.html', [
  'pageTitle' => 'Links - Small Screen Superman', 
  'contentTitle' => "Links",
  'content' => file_get_contents('links-contents.html'),
]);
?>