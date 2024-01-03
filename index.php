<?php
require_once './twig-base.php';
echo $twig->render('layout.html', [
  'pageTitle' => 'Small Screen Superman - Superman TV Fansite', 
  'contentTitle' => 'Proudly Celebrating the Man of Steel',
  'content' => file_get_contents('index-contents.html'),
  'titleCard' => array(
    'src' => 'aos-superman-intro-stance.jpg',
    'alt' => 'George Reeves as Superman in the Adventures of Superman TV show intro'
  )
]);
?>