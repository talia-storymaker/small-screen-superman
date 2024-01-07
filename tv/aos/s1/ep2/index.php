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
    "scr003_Jim_meets_Chris.jpg",
    "scr021_Clark_and_Jim_look_with_curiosity.jpg",
    "scr027_Superman_talks_to_the_Coasst_Guard_ship_captain.jpg",
    "scr032_Superman_pulls_open_the_prison_bars_to_save_Jim.jpg",
    "scr044_Clark_and_the_coast_guard_captain_laughing.jpg"
  ),
  'links' => array(
    'IMDb Page' => 'https://www.imdb.com/title/tt0506615/',
    '<i>The Adventures Continue</i> Review by Bruce Dettman' => 'http://www.jimnolt.com/HauntedLighthouseReview.htm',
    '<i>Superman Homepage</i> Review by James Lantz' => 'https://www.supermanhomepage.com/tv/tv.php?topic=reviews/aos-ep002'
  )
]);
?>