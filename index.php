<?php
require_once './twig-base.php';
echo $twig->render('layout.html', [
  'pageTitle' => 'Small Screen Superman - Superman TV Fansite', 
  'contentTitle' => 'Proudly Celebrating the Man of Steel',
  'titleCard' => array(
    'src' => 'aos-superman-intro-stance.jpg',
    'alt' => 'George Reeves as Superman in the Adventures of Superman TV show intro'
  ),
  'description' => 'Superman fansite featuring information about TV episodes, games to test your Superman knowledge, a blog, and more.'
]);
?>