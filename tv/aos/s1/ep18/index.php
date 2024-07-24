<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Drums of Death',
  'imdbId' => 'tt0506563',
  'tacId' => 'DrumsOfDeathReview',
  'noTranscript' => true
]);
?>