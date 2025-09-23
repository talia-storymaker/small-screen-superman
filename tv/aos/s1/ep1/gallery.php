<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/captions-and-alts.php';
echo $twig->render('/gallery.html', [
  'epTitle' => 'Superman on Earth',
  'altOverrides' => captionsAndAlts()
]);
?>