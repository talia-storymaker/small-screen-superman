<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Rescue',
  'imdbId' => 'tt0506587',
  'tacId' => 'RescueReview',
  'noTranscript' => true
]);
?>