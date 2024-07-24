<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Night of Terror',
  'imdbId' => 'tt0506580',
  'tacId' => 'NightOfTerrorReview',
]);
?>