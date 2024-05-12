<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'show' => 'Adventures of Superman',
  'sNum' => 1,
  'epNum' => 5,
  'overallEpNum' => 5,
  'epTitle' => 'The Monkey Mystery',
  'content' => file_get_contents('index-contents.html'),
  'gallery' => array(),
  'imdbId' => 'tt0506627',
  'tacId' => 'MonkeyMysteryReview',
  'description' => 'Information, gallery, and more about The Haunted Lighthouse, the fourth episode of Adventures of Superman.'
]);
?>