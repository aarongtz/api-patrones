<?php

namespace Patterns\Factory;

interface DBConnector{

   public function connect(array $data);

   public function insert(array $data);

   public function update(array $data);

   public function delete(array $data);
}