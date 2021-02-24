<?php

namespace Patterns\Factory;

class BdConnectorFactory
{
   static public function  getInstance(): DBConnector
   {
      $featureFlag = $_ENV['POSTGRESSQL_FLAG'];

      if ($featureFlag == true) {
         return new PostgressqlConnector();
      }

      return new MysqlConnector();
   }
}
