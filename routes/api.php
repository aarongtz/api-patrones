<?php

use Patterns\Decorator\RedisCached;
use Patterns\Routing\Router;
use Patterns\Routing\Request;
use Patterns\Factory\ContactResource;

$router = new Router(new Request);

$router->get('/', function () {
   echo 'hello';

   return true;
});

$router->post('/send-contact', function ($request) {
   header('Content-Type: application/json');

   $body = $request->getBody();

   /* Factory: */

   /*$contact = new ContactResource();
   $contact->store($body);
   
   if (!$contactInserted) {
      $response['status'] = 'error';
   }
   
   */

   $contact = new ContactResource();

   $redisCached = new RedisCached($contact);
   $redisCached->store($body);


   $response = array();
   $response['status'] = 'success';

   

   echo json_encode($response);
});
