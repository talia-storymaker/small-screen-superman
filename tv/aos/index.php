<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/layout.html', [
  'pageTitle' => 'Adventures of Superman - Small Screen Superman', 
  'contentTitle' => "<span class='seriesname'>Adventures of Superman</span><br /> 
	The 1952-1958 classic starring George Reeves - Superman's first, and still legendary, television adventure",
  'content' => file_get_contents('index-contents.html'),
]);
?>