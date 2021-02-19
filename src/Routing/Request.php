<?php

namespace Patterns\Routing;

use Patterns\Routing\RequestInterface;

class Request implements RequestInterface
{
   public function __construct()
   {
      $this->bootstrapSelf();
   }

   private function bootstrapSelf()
   {
      foreach ($_SERVER as $key => $value) {
         $this->{$this->toCamelCase($key)} = $value;
      }
   }

   private function toCamelCase($string)
   {
      $result = strtolower($string);

      preg_match_all('/_[a-z]/', $result, $matches);

      foreach ($matches[0] as $match) {
         $c = str_replace('_', '', strtoupper($match));
         $result = str_replace($match, $c, $result);
      }

      return $result;
   }

   public function getBody()
   {
      if ($this->requestMethod === "GET") {
         return;
      }


      if ($this->requestMethod == "POST") {
         header("Content-Type: application/json; charset=UTF-8");
         header('Access-Control-Allow-Origin: *');

         $_POST = json_decode(file_get_contents('php://input'), true);

         //var_dump($_POST);

         /*$body = array();
         foreach ($_POST as $key => $value) {
            $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
         }*/

         $body = $_POST;

         return $body;
      }
   }
}
