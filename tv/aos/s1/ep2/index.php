<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'show' => 'Adventures of Superman',
  'sNum' => 1,
  'epNum' => 2,
  'overallEpNum' => 2,
  'epTitle' => 'The Haunted Lighthouse',
  'content' => file_get_contents('index-contents.html'),
  'gallery' => array(
    "scr002_Jim_meets_Aunt_Louisa.jpg",
    "scr005_The_housekeeper_Alice.jpg",
    "scr021_Clark_and_Jim_look_with_curiosity.jpg",
    "scr038_Mack's_knife_bends_as_he_tries_to_stab_Superman_in_the_chest.jpg",
    "scr044_Clark_and_the_coast_guard_captain_laughing.jpg"
  ),
  'imdbId' => 'tt0506615',
  'tacId' => 'HauntedLighthouseReview',
  'description' => 'Information, gallery, and more about The Haunted Lighthouse, the second episode of Adventures of Superman.'
]);
?>