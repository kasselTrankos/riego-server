<?php
  require __DIR__.'/../vendor/autoload.php';
  use Doctrine\ORM\Tools\Setup;
  use Doctrine\ORM\EntityManager;


  class Conn {
    private $entityManager;
    public function __construct() {
      $conn = require_once __DIR__.'/../config.php';
      $isDevMode = true;
      $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__.'/../src'),
        $isDevMode, null, null, false);
      $this->entityManager = EntityManager::create($conn, $config);
    }

    public function dm() {
      return $this->entityManager;
    }
  } 
  class Api {
    private $TWIG;
    private $DM;
    public function __construct() {
      $conn = new Conn();
      $this->DM = $conn->dm();
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
        ['title' => 'Riego application server que pasa?',
        'body'=>'This is an application to mantain at date the riego information of my home.']);
    }
    function api() {
      echo "this is api";
    }

    function volumen() {
      $query = $this->DM->createQuery('SELECT u FROM Terraza\Entity\Water u');
      $r = $query->getArrayResult();
      $template = $this->TWIG->load('volumen.json');
      header('Content-Type: application/json');
      echo $template->render([
        'volumen' => $r[0]['state']
      ]);
    }
    function program() {
      $query = $this->DM->createQuery('SELECT u FROM Terraza\Entity\Program u');
      $r = $query->getArrayResult();
      $template = $this->TWIG->load('volumen.json');
      header('Content-Type: application/json');
      echo $template->render([
        'volumen' => $r[0]['state'],
        'date'  => $r[0]['date'],
        'duration' => $r[0]['duration']
      ]);
    }
    function socket() {
      echo 'WILL BEO AGGG';
      $socket = stream_socket_server("tcp://localhost:8000", $errno, $errstr);
      if (!$socket) {
        echo "$errstr ($errno)<br />\n";
      } else {
        while ($conn = stream_socket_accept($socket)) {
          fwrite($conn, 'The local time is ' . date('n/j/Y g:i a') . "\n");
          fclose($conn);
        }
        fclose($socket);
      }
    }
  }