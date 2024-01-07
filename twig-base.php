<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/templates');
$twig = new \Twig\Environment($loader);
$twig->addFilter(
  new \Twig\TwigFilter('regexReplace', function ($string, $pattern, $replacement) {
  return preg_replace($pattern, $replacement, $string);
}));
$twig->addExtension(new \Twig\Extension\PhpFunctionExtension());
?>
