<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Double Trouble',
  'imdbId' => 'tt0506562',
  'tacId' => 'DoubleTroubleReview',
  'noTranscript' => true,
  'noSH' => true
]);
?>