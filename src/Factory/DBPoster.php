<?php

namespace Patterns\Factory;

abstract class DBPoster{

   abstract public function getConnection() : DBConnector;

   public function executeInsert($params){
      $db = $this->getConnection();

      $db->connect($params);

      $result = $db->insert($params);
      
      //echo 'Inserted into database';

      return true;
   }
}