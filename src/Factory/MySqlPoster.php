<?php

namespace Patterns\Factory;

class MySqlPoster extends DBposter
{
   private $user, $password;

   public function __construct(string $user, string $password)
   {
      $this->user = $user;
      $this->password = $password;
   }

   public function getConnection() : DBConnector
   {
      return new MySqlConnector($this->user, $this->password);
   }
}
