<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'epTitle' => 'The Birthday Letter',
  'description' => 'A disabled girl writes a letter to Superman, but is soon thereafter kidnapped by criminals, casting suspicion on the Man of Steel.',
  'gallery' => array(
    "scr002_Lois_Lane_reads_the_letter_from_Kathy_to_Superman_aloud_to_Perry_White.jpg",
    "scr009_Virginia_stands_by_while_Superman_reads_Kathy's_note.jpg",
    "scr033_Slugger_and_Kathy_smiling_at_each_other.jpg"
  ),
  'imdbId' => 'tt0506600',
  'tacId' => 'BirthdayLetterReview',
  'noTranscript' => true
]);
?>