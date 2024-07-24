<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/templates');
$twig = new \Twig\Environment($loader);
$twig->addFilter(
  new \Twig\TwigFilter('regexReplace', function ($string, $pattern, $replacement) {
  return preg_replace($pattern, $replacement, $string);
}));
$twig->addFilter(
  new \Twig\TwigFilter('regexMatchOnce', function ($string, $pattern) {
  $matches = array();
  preg_match($pattern, $string, $matches);
  return $matches[0];
}));
$twig->addFilter(
  new \Twig\TwigFilter('substr', function ($string, $start, $end = null) {
  return substr($string, $start, $end);
}));
$twig->addFilter(
  new \Twig\TwigFilter('addZeroIfNeeded', function ($string) {
  if (strlen($string) === 1) {
    return "0" . $string;
  } else if (strlen($string) === 2) {
    return $string;
  }
}));
$twig->addExtension(new \Twig\Extension\PhpFunctionExtension());
$twig->addGlobal('content', file_get_contents('index-contents.html'));
$twig->addGlobal('currentDir', preg_replace('/[^\/]+$/', '', "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"));
$twig->addGlobal('filename', basename($_SERVER['REQUEST_URI']));
?>
