<?php

namespace Patterns\Factory;

use Patterns\Factory\DBConnector;

class MySqlConnector implements DBConnector{

   private $user, $password;

   public function __construct($user, $password){
      $this->user = $user;
      $this->password = $password;
   }

   public function connect(array $data){
      //echo 'Connected to MySQL';

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
