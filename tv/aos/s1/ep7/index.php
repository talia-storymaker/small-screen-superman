<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'pageTitle' => 'Adventures of Superman: The Birthday Letter - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br /> Season 1 Episode 7: The Birthday Letter",
  'titleCard' => array(
    'src' => 'media/screencaps/scr001_Titlecard.jpg',
    'alt' => 'Titlecard for Adventures of Superman: The Birthday Letter'
  ),
  'content' => file_get_contents('index-contents.html'),
  'gallery' => array(
    "scr002_Lois_Lane_reads_the_letter_from_Kathy_to_Superman_aloud_to_Perry_White.jpg",
    "scr009_Virginia_stands_by_while_Superman_reads_Kathy's_note.jpg",
    "scr033_Slugger_and_Kathy_smiling_at_each_other.jpg"
  ),
  'links' => array(
    'IMDb Page' => 'http://www.imdb.com/title/tt0506600/',
    '<i>The Adventures Continue</i> Review by Bruce Dettman' => 'http://www.jimnolt.com/BirthdayLetterReview.htm',
    '<i>Superman Homepage</i> Review by James Lantz' => 'https://www.supermanhomepage.com/tv/tv.php?topic=reviews/aos-ep007',
  ),
  'description' => 'Information, gallery, and more about The Birthday Letter, the seventh episode of Adventures of Superman.'
]);
?>