<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Treasure of the Incas',
  'imdbId' => 'tt0506652',
  'tacId' => 'TreasureOfTheIncasReview',
  'noTranscript' => true
]);
?>