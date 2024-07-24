<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Human Bomb',
  'imdbId' => 'tt0506616',
  'tacId' => 'HumanBombReview',
  'noTranscript' => true
]);
?>