<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'pageTitle' => 'Adventures of Superman: Superman on Earth - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br /> Season 1 Episode 1: Superman on Earth",
  'titleCard' => array(
    'src' => 'media/screencaps/scr001_Titlecard.png',
    'alt' => 'Titlecard for Adventures of Superman: Superman on Earth'
  ),
  'content' => file_get_contents('index-contents.html'),
  'gallery' => array(
    "scr002_Kryptonian_council_in_the_Temple_of_Wisdom.png",
    "scr003_Jor-El_sitting_in_the_council.png",
    "scr004_Ros-An_the_council_leader.png",
    "scr010_Baby_Kal-El.png",
    "scr016_Eben_Kent_retrieving_the_baby_Kal-El_from_the_burning_rocket.png",
    "scr051_Clark's_first_appearance_as_Superman,_rescuing_the_man_dangling_on_a_rope_from_a_dirigible.png"
  ),
  'links' => array(
    'IMDb Page' => 'https://www.imdb.com/title/tt0506593/',
    '<i>The Adventures Continue</i> Review by Bruce Dettman' => 'http://www.jimnolt.com/SupermanOnEarthReview.htm',
    '<i>The Adventures Continue</i> Comparative Review by Chris Brockow' => 'http://www.jimnolt.com//SupermanOnEarth.htm',
    '<i>Superman Homepage</i> Review by James Lantz' => 'https://www.supermanhomepage.com/tv/tv.php?topic=reviews/aos-ep001'
  )
]);
?>