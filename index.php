<?php
  require __DIR__.'/vendor/autoload.php';
  require_once 'apiRoutes.php';

  use PHPRouter\RouteCollection;
  use PHPRouter\Config;
  use PHPRouter\Router;
  use PHPRouter\Route;
  
  $config = Config::loadFromFile(__DIR__.'/routes.yaml');
  $router = Router::parseConfig($config);
  $router->matchCurrentRequest();