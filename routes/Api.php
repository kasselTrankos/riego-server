<?php
  require_once __DIR__.'/../vendor/autoload.php';
  $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../tpl');
  $twig = new \Twig\Environment($loader, [
    'cache' => __DIR__.'/../cache',
  ]);

  class Api {
    function index() {
      echo " give a minenen";
    }
    function api() {
      echo " api is here";
    }
    function volumen() {
      echo "riegos api";
    }

  }