<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'pageTitle' => 'Adventures of Superman: Superman on Earth - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br> Season 1 Episode 1: Superman on Earth",
  'titleCard' => array(
    'src' => 'media/screencaps/scr001_Titlecard.png',
    'alt' => 'Titlecard for Adventures of Superman: Superman on Earth'
  ),
  'content' => file_get_contents('index-contents.html'),
  'hasGallery' => true,
  'hasLinks' => true
]);
?>