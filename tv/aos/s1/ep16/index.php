<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Mystery in Wax',
  'imdbId' => 'tt0506652',
  'tacId' => 'MysteryInWaxReview',
  'noTranscript' => true,
  'noSH' => true
]);
?>