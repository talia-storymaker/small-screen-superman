<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'show' => 'Adventures of Superman',
  'sNum' => 1,
  'epNum' => 3,
  'overallEpNum' => 3,
  'epTitle' => 'The Case of the Talkative Dummy',
  'content' => file_get_contents('index-contents.html'),
  'gallery' => array(
    "scr008_Lois_and_Clark_questioning.jpg",
    "scr035_Superman_delivers_the_unharmed_Jimmy_to_Lois.jpg",
    "scr052_Clark,_Lois,_and_Henderson.jpg"
  ),
  'imdbId' => 'tt0506604',
  'tacId' => 'TalkativeDummyReview',
  'description' => 'Information, gallery, and more about The Case of the Talkative Dummy, the third episode of Adventures of Superman.'
]);
?>