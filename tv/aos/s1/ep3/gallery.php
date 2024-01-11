<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/gallery.html', [
  'pageTitle' => 'Gallery for Adventures of Superman: The Case of the Talkative Dummy - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br /> Season 1 Episode 3: The Case of the Talkative Dummy",
]);
?>