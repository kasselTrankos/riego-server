<?php
  require_once __DIR__.'/../vendor/autoload.php';
  
  class Api {
    private $TWIG;
    public function __construct() {
      $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../tpl');
      $this->TWIG = new \Twig\Environment($loader, [
        'cache' => __DIR__.'/../cache',
        ]);
      $this->TWIG->getExtension(\Twig\Extension\CoreExtension::class)
        ->setTimezone('Europe/Madrid');
    }
    function index() {
      $template = $this->TWIG->load('api.html');
      echo $template->render(
        ['title' => 'Riego application server',
        'body'=>'This is an application to mantain at date the riego information of my home.']);
    }
    function api() {
      echo "this is api";
    }
    function volumen() {
      $template = $this->TWIG->load('volumen.json');
      header('Content-Type: application/json');
      echo $template->render([
        "volumen"=>100
      ]);
    }

  }