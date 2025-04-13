<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Mind Machine',
  'description' => "A long-distance hypnosis machine is being used to prevent people from testifying against a mob boss, necessitating Superman's intervention.",
  'gallery' => array(
    "scr006_Clark_Kent_and_Lois_Lane_look_over_Perry_White's_shoulder_as_he_reads_the_paper.jpg",
    "scr021_Lois'_face_is_urgent_as_she_grabs_Clark's_arm.jpg",
    "scr039_Clark_crosses_his_arms_as_he_talks_with_Hadley.jpg",
    "scr031_Superman_gives_assurance_to_Lois_and_the_repairman.jpg",
    "scr058_Superman_looks_into_the_distance_as_he's_with_Dr._Stanton.jpg"
  ),
  'imdbId' => 'tt0506626',
  'tacId' => 'MindMachineReview',
  'noTranscript' => true,
]);
?>