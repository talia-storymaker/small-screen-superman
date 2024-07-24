<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Deserted Village',
  'imdbId' => 'tt0506608',
  'tacId' => 'DesertedVillageReview',
  'noTranscript' => true
]);
?>