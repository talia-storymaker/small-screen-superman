<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Monkey Mystery',
  'gallery' => array(
    'scr012_Pepi_the_monkey_in_a_Superman_costume_playing_cymbals.jpg',
    'scr013_Clark_Kent,_Lois_Lane,_and_a_crowd_of_kids_look_at_the_monkey_and_organ_grinder.jpg',
    'scr034_Lois_is_attacked_by_a_man_with_a_gun.jpg',
    'scr045_Superman_talks_with_Maria_as_she_wakes_up.jpg',
    'scr072_Superman_knocks_the_heads_of_the_criminals,_Max_and_Crane,_together.jpg'
  ),
  'imdbId' => 'tt0506627',
  'tacId' => 'MonkeyMysteryReview'
]);
?>