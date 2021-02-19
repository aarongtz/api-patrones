<?php

namespace Patterns\Factory;

class Contact{

   public function addContact(DBPoster $connectorPoster, array $data){
      //echo 'Contact added from';

      $newContact = $connectorPoster->executeInsert($data);


      return true;
   }

}