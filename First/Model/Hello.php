<?php
 namespace Restapi\First\Model;
 use Restapi\First\Api\HelloInterface;
 class Hello implements HelloInterface
 {
   /**
 * Returns greeting message to user
 * @api
 * @param string $name Users name.
 * @return string Greeting message with users name.
 */
 public function name($name){
   return "Hello, " . $name;
}
 }
