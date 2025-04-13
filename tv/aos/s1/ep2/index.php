<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Haunted Lighthouse',
  'description' => 'Jim Olsen is visiting his aunt on an island, but when suspicious things start happening, he calls Clark Kent for help, and soon Superman needs to get involved.',
  'gallery' => array(
    "scr002_Jim_meets_Aunt_Louisa.jpg",
    "scr005_The_housekeeper_Alice.jpg",
    "scr021_Clark_and_Jim_look_with_curiosity.jpg",
    "scr038_Mack's_knife_bends_as_he_tries_to_stab_Superman_in_the_chest.jpg",
    "scr044_Clark_and_the_coast_guard_captain_laughing.jpg"
  ),
  'imdbId' => 'tt0506615',
  'tacId' => 'HauntedLighthouseReview',
]);
?>