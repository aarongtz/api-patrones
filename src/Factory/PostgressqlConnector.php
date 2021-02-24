<?php

namespace Patterns\Factory;

class PostgressqlConnector implements DBConnector{

   private $user, $password;

   public function __construct(){
      $this->user = $_ENV['POSTGRESQL_DB_USER'];
      $this->password = $_ENV['POSTGRESQL_DB_PASSWORD'];
   }

   public function connect(){
      //echo 'Connected to PostgressSQL';

      return true;
   }


   public function insert(array $data){
      //echo 'Data inserted';

      return true;
   }

   public function update(array $data){
      //echo 'Data updated';

      return true;
   }

   public function delete(array $data){
      //echo 'Data deleted';

      return true;
   }

}
