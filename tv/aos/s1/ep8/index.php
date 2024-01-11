<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'pageTitle' => 'Adventures of Superman: The Mind Machine - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br /> Season 1 Episode 8: The Mind Machine",
  'titleCard' => array(
    'src' => 'media/screencaps/scr001_Titlecard.png',
    'alt' => 'Titlecard for Adventures of Superman: The Birthday Letter'
  ),
  'content' => file_get_contents('index-contents.html'),
  'links' => array(
    'IMDb Page' => 'http://www.imdb.com/title/tt0506626/',
    '<i>The Adventures Continue</i> Review by Bruce Dettman' => 'http://www.jimnolt.com/MindMachineReview.htm',
    '<i>Superman Homepage</i> Review by James Lantz' => 'https://www.supermanhomepage.com/tv/tv.php?topic=reviews/aos-ep008',
  ),
  'description' => 'Information, gallery, and more about The Mind Machine, the eighth episode of Adventures of Superman.'
]);
?>