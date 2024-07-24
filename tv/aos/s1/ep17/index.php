<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Runaway Robot',
  'imdbId' => 'tt0506634',
  'tacId' => 'RunawayRobotReview',
  'noTranscript' => true
]);
?>