<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Unknown People - Part 2',
  'imdbId' => 'tt0506643',
  'tacId' => 'UnknownPeopleReview',
  'noTranscript' => true
]);
?>