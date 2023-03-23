
<?php

namespace App\Table;

class UserTable {
   public int $id;
   public string $email;
   public string $password;
   // when we have boolean var, please use "is" before variable
   public bool $isAdmin;

   //php class constructor
   public function addUser(string $email, string $password):int{
   return 1;   
   }
   public function insertUser(string $email, string $password):int{
   return 1;   
   }
   public function deleteUser(string $email, string $password):int{
   return 1;   
   }
   public function update(string $email, string $password):int{
   return 1;   
   }

}