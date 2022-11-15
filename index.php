<?php

require_once(__DIR__.'/src/config/bootstrap.php');

$uri = Uri::getUri($_SERVER['REQUEST_URI']);
$resources = Uri::getResources($uri, INDEX_FILE_NAME);

$module = Collection::get($resources, 0);
$method = Collection::get($resources, 1);

$module = strtolower($module);
$method = strtolower($method);

switch ($module) {
  case GAME_MODULE:
    $controller = new GameController();
    $controller->{$method}();
    break;

  default:
    header(HTTP_HEADER_NOT_FOUND);
    break;
}