<?php

namespace Patterns\Factory;

interface Resource
{
   public function store(array $data);

   public function show(array $data);

   public function update(array $data);

   public function destroy(array $data);
}
