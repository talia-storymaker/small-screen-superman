<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Riddle of the Chinese Jade',
  'imdbId' => 'tt0506633',
  'tacId' => 'ChineseJadeReview',
  'noTranscript' => true
]);
?>