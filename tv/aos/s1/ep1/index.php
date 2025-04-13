<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Superman on Earth',
  'description' => 'Clark Kent, an alien raised by humans, moves to the great city of Metropolis and uses his powers to help humanity, using the identity Superman.',
  'gallery' => array(
    "scr002_Kryptonian_council_in_the_Temple_of_Wisdom.jpg",
    "scr003_Jor-El_sitting_in_the_council.jpg",
    "scr004_Ros-An_the_council_leader.jpg",
    "scr010_Baby_Kal-El.jpg",
    "scr016_Eben_Kent_retrieving_the_baby_Kal-El_from_the_burning_rocket.jpg",
    "scr051_Clark's_first_appearance_as_Superman,_rescuing_the_man_dangling_on_a_rope_from_a_dirigible.jpg"
  ),
  'imdbId' => 'tt0506593',
  'tacId' => 'SupermanOnEarthReview',
  'links' => array(
    '<i>The Adventures Continue</i> Comparative Review by Chris Brockow' => 'http://www.jimnolt.com//SupermanOnEarth.htm',
  ),
]);
?>