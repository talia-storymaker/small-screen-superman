<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Secret of Superman',
  'imdbId' => 'tt0506635',
  'noTranscript' => true
]);
?>