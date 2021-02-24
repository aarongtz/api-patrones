<?php

namespace Patterns\Factory;

class MysqlConnector implements DBConnector{

   private $user, $password;

   public function __construct(){
      $this->user = $_ENV['MYSQL_DB_USER'];
      $this->password = $_ENV['MYSQL_DB_PASSWORD'];
   }

   public function connect(array $data){
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
