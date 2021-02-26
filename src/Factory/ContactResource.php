<?php

namespace Patterns\Factory;


class ContactResource implements Resource
{

   public function store(array $data)
   {

      $db = BdConnectorFactory::getInstance();
      $db->connect();
      $inserted = $db->insert($data);

      return $inserted;
   }

   public function show(array $data)
   {
      return true;
   }

   public function update(array $data)
   {
      return true;
   }

}
