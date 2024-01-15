<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/tv-episode.html', [
  'pageTitle' => 'Adventures of Superman: The Case of the Talkative Dummy - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br /> Season 1 Episode 3: The Case of the Talkative Dummy",
  'titleCard' => array(
    'src' => 'media/screencaps/scr001_Titlecard.jpg',
    'alt' => 'Titlecard for Adventures of Superman: The Case of the Talkative Dummy'
  ),
  'content' => file_get_contents('index-contents.html'),
  'gallery' => array(
    "scr008_Lois_and_Clark_questioning.jpg",
    "scr035_Superman_delivers_the_unharmed_Jimmy_to_Lois.jpg",
    "scr052_Clark,_Lois,_and_Henderson.jpg"
  ),
  'links' => array(
    'IMDb Page' => 'http://www.imdb.com/title/tt0506604/',
    '<i>The Adventures Continue</i> Review by Bruce Dettman' => 'http://www.jimnolt.com/TalkativeDummyReview.htm',
    '<i>Superman Homepage</i> Review by James Lantz' => 'https://www.supermanhomepage.com/tv/tv.php?topic=reviews/aos-ep003',
  ),
  'description' => 'Information, gallery, and more about The Case of the Talkative Dummy, the third episode of Adventures of Superman.'
]);
?>