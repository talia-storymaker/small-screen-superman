<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'show' => 'Adventures of Superman',
  'sNum' => 1,
  'epNum' => 4,
  'overallEpNum' => 4,
  'epTitle' => 'Mystery of the Broken Statues',
  'content' => file_get_contents('index-contents.html'),
  'gallery' => array(
    "scr007_Lois_Lane_in_the_artcraft_shop,_confused_and_a_bit_startled.jpg",
    "scr012_Clark_sits_on_Lois'_desk_with_a_smile_and_talks_with_her.jpg",
    "scr022_Lois_excitedly_talks_on_the_phone.jpg",
    "scr045_Martin_attempts_to_interrogate_Lois_while_Dorn_stands_menacingly_in_the_background.jpg",
    "scr058_Clark_shows_Lois_and_the_Inspector_a_chalkboard_with_pictures_and_names_of_the_items_from_the_statues.jpg"
  ),
  'imdbId' => 'tt0506579',
  'tacId' => 'BrokenStatuesReview',
  'description' => 'Information, gallery, and more about The Haunted Lighthouse, the fourth episode of Adventures of Superman.'
]);
?>