<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'No Holds Barred',
  'imdbId' => 'tt0506581',
  'tacId' => 'NoHoldsBarredReview',
  'noTranscript' => true
]);
?>