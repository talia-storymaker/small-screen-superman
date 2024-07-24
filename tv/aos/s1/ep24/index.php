<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Crime Wave',
  'imdbId' => 'tt0506557',
  'tacId' => 'CrimeWaveReview',
  'noTranscript' => true
]);
?>