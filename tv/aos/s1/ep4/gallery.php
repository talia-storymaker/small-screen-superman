<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/twig-base.php';
echo $twig->render('/gallery.html', [
  'epTitle' => 'Mystery of the Broken Statues'
]);
?>