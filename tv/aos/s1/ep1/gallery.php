<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/gallery.html', [
  'pageTitle' => 'Gallery for Adventures of Superman: Superman on Earth - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br /> Season 1 Episode 1: Superman on Earth",
]);
?>