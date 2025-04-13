<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Case of the Talkative Dummy',
  'description' => 'Clark Kent, Lois Lane, and Jim Olsen watch a ventrioloquist act where the dummy seems to have a mind of its own, which actually turns out to be part of a criminal plot Superman must help unravel.',
  'gallery' => array(
    "scr008_Lois_and_Clark_questioning.jpg",
    "scr035_Superman_delivers_the_unharmed_Jimmy_to_Lois.jpg",
    "scr052_Clark,_Lois,_and_Henderson.jpg"
  ),
  'imdbId' => 'tt0506604',
  'tacId' => 'TalkativeDummyReview'
]);
?>