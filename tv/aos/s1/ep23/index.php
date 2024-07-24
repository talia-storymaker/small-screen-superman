<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Ghost Wolf',
  'imdbId' => 'tt0506566',
  'tacId' => 'GhostWolfReview',
  'noTranscript' => true
]);
?>