<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Stolen Costume',
  'imdbId' => 'tt0506637',
  'tacId' => 'StolenCostumeReview',
  'noTranscript' => true
]);
?>