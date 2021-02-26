<?php

namespace Patterns\Decorator;

use Patterns\Decorator\CachedResource;

class RedisCached extends CachedResource{
   public function store(array $data){
      $resource = parent::store($data);

      //store here using redis cache service
      
      return $resource;
      
   }
}