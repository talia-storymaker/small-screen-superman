<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Czar of the Underworld',
  'imdbId' => 'tt0506558',
  'tacId' => 'CzarOfUnderworldReview',
  'noTranscript' => true
]);
?>