<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Unknown People - Part 1',
  'imdbId' => 'tt0506642',
  'tacId' => 'UnknownPeopleReview',
  'noTranscript' => true
]);
?>