<?php

namespace Patterns\Decorator;

use Patterns\Factory\Resource;

class CachedResource implements Resource
{

   protected $resource;

   public function __construct(Resource $resource)
   {
      $this->resource = $resource;
   }

   public function store(array $data)
   {
      return $this->resource->store($data);
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
