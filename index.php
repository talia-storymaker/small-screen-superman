<?php
require_once './twig-base.php';
echo $twig->render('layout.html', [
  'pageTitle' => 'Small Screen Superman - Superman TV Fansite', 
  'contentTitle' => 'Proudly Celebrating the Man of Steel',
  'content' => "<p>Welcome to <i>Small Screen Superman</i> by Talia Hatfield. This is just my little digital self-indulgence - a Superman fansite that is mostly focused on Superman TV shows. Theoretically, this site contains articles and reviews for episodes from various Superman TV series, but chances are it will always be very incomplete. My only hope is that you manage to have a bit of fun here! For more frequent updates, check out the site's <a href=\"/blog\">Blog</a>, where I blab a bit more informally about superhero shows while also mentioning whenever I make an update to the main site.</p>",
  'titleCard' => array(
    'src' => 'aos-superman-intro-stance.jpg',
    'alt' => 'George Reeves as Superman in the Adventures of Superman TV show intro'
  )
]);
?>