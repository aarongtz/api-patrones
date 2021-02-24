<?php

use Patterns\Routing\Router;
use Patterns\Routing\Request;
use Patterns\Factory\ContactResource;

$router = new Router(new Request);

$router->get('/', function () {
   echo 'hola1';

   return true;
});


$router->get('/profile', function ($request) {
   echo 'hola2';

   return true;
});

$router->post('/send-contact', function ($request) {
   header('Content-Type: application/json');

   $body = $request->getBody();
   $user = 'root';
   $password = 'root';

   $contact = new ContactResource();
   $contactInserted = $contact->store($body);

   $response = array();
   $response['status'] = 'success';

   if (!$contactInserted) {
      $response['status'] = 'error';
   }

   echo json_encode($response);
});
