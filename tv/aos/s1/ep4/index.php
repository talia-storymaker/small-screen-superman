<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'Mystery of the Broken Statues',
  'gallery' => array(
    "scr007_Lois_Lane_in_the_artcraft_shop,_confused_and_a_bit_startled.jpg",
    "scr012_Clark_sits_on_Lois'_desk_with_a_smile_and_talks_with_her.jpg",
    "scr022_Lois_excitedly_talks_on_the_phone.jpg",
    "scr045_Martin_attempts_to_interrogate_Lois_while_Dorn_stands_menacingly_in_the_background.jpg"
  ),
  'imdbId' => 'tt0506579',
  'tacId' => 'BrokenStatuesReview'
]);
?>