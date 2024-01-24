<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'pageTitle' => 'Adventures of Superman: The Mind Machine - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br /> Season 1 Episode 8: The Mind Machine",
  'titleCard' => array(
    'src' => 'media/screencaps/scr001_Titlecard.jpg',
    'alt' => 'Titlecard for Adventures of Superman: The Birthday Letter'
  ),
  'content' => file_get_contents('index-contents.html'),
  'links' => array(
    'IMDb Page' => 'http://www.imdb.com/title/tt0506626/',
    '<i>The Adventures Continue</i> Review by Bruce Dettman' => 'http://www.jimnolt.com/MindMachineReview.htm',
    '<i>Superman Homepage</i> Review by James Lantz' => 'https://www.supermanhomepage.com/tv/tv.php?topic=reviews/aos-ep008',
  ),
  'gallery' => array(
    "scr006_Clark_Kent_and_Lois_Lane_look_over_Perry_White's_shoulder_as_he_reads_the_paper.jpg",
    "scr021_Lois'_face_is_urgent_as_she_grabs_Clark's_arm.jpg",
    "scr039_Clark_crosses_his_arms_as_he_talks_with_Hadley.jpg",
    "scr031_Superman_gives_assurance_to_Lois_and_the_repairman.jpg",
    "scr058_Superman_looks_into_the_distance_as_he's_with_Dr._Stanton.jpg"
  ),
  'description' => 'Information, gallery, and more about The Mind Machine, the eighth episode of Adventures of Superman.'
]);
?>