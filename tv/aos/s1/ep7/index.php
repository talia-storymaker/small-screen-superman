<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'show' => 'Adventures of Superman',
  'sNum' => 1,
  'epNum' => 7,
  'overallEpNum' => 7,
  'epTitle' => 'The Birthday Letter',
  'content' => file_get_contents('index-contents.html'),
  'gallery' => array(
    "scr002_Lois_Lane_reads_the_letter_from_Kathy_to_Superman_aloud_to_Perry_White.jpg",
    "scr009_Virginia_stands_by_while_Superman_reads_Kathy's_note.jpg",
    "scr033_Slugger_and_Kathy_smiling_at_each_other.jpg"
  ),
  'imdbId' => 'tt0506600',
  'tacId' => 'BirthdayLetterReview',
  'noTranscript' => true,
  'description' => 'Information, gallery, and more about The Birthday Letter, the seventh episode of Adventures of Superman.'
]);
?>