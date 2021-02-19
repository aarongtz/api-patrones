<?php

namespace Patterns\Factory;

class PostgressqlPoster extends DBposter
{
   private $user, $password;

   public function __construct(string $user, string $password)
   {
      $this->user = $user;
      $this->password = $password;
   }

   public function getConnection() : DBConnector
   {
      return new PostgressqlConnector($this->user, $this->password);
   }
}
