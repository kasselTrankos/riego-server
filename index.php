<?php
  use Phroute\Phroute\RouteCollector;

  $router = new RouteCollector();
  
  $router->get('/api/riegos', function(){
    return '<joson>Alovaro is ok</joson>';
  });
  
  $router->post('/example/{id}', function($id){
    return 'This route responds to requests with the POST method at the path /example/1234. It passes in the parameter as a function argument.';
  });
  
  $router->any('/example', function(){
    return 'This route responds to any method (POST, GET, DELETE, OPTIONS, HEAD etc...) at the path /example';
  });