<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Evil Three',
  'imdbId' => 'tt0506610',
  'tacId' => 'EvilThreeReview',
  'noTranscript' => true
]);
?>