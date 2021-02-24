<?php

namespace Patterns\Factory;

//Implementar alguna interfaz y no hacerla así solamente

class ContactResource implements Resource
{

   public function store(array $data)
   {

      $db = BdConnectorFactory::getInstance();
      $db->connect();
      $inserted = $db->insert($data);


      return true;
   }

   public function show(array $data)
   {
      return true;
   }

   public function update(array $data)
   {
      return true;
   }

   public function destroy(array $data)
   {
      return true;
   }
}
