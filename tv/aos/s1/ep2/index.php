<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'pageTitle' => 'Adventures of Superman: The Haunted Lighthouse - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br /> Season 1 Episode 2: The Haunted Lighthouse",
  'titleCard' => array(
    'src' => 'media/screencaps/scr001_Titlecard.jpg',
    'alt' => 'Titlecard for Adventures of Superman: The Haunted Lighthouse'
  ),
  'content' => file_get_contents('index-contents.html'),
  'gallery' => array(
    "scr002_Jim_meets_Aunt_Louisa.jpg",
    "scr005_The_housekeeper_Alice.jpg",
    "scr021_Clark_and_Jim_look_with_curiosity.jpg",
    "scr038_Mack's_knife_bends_as_he_tries_to_stab_Superman_in_the_chest.jpg",
    "scr044_Clark_and_the_coast_guard_captain_laughing.jpg"
  ),
  'links' => array(
    'IMDb Page' => 'https://www.imdb.com/title/tt0506615/',
    '<i>The Adventures Continue</i> Review by Bruce Dettman' => 'http://www.jimnolt.com/HauntedLighthouseReview.htm',
    '<i>Superman Homepage</i> Review by James Lantz' => 'https://www.supermanhomepage.com/tv/tv.php?topic=reviews/aos-ep002',
    'Transcript' => 'https://subslikescript.com/series/Adventures_of_Superman-44231/season-1/episode-2-The_Haunted_Lighthouse'
  )
]);
?>