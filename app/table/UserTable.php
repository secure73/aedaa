<?php

namespace App\Table;

class UserTable
{

   public int $id;
   public string $email;
   public string $password;
   // when we have boolean var, please use "is" before variable
   public bool $isAdmin;

   //php class constructor
   
   public function insert(string $email, string $password): int
   {
      $this->email = $email && $this->password = $password;
      return 1;
   }
   public function delete(string $email, string $password): bool
   {
      $this->email = $email && $this->password = $password;
      return false;
   }
   public function updatePassword(string $password): bool
   {
      $this->password = $password;
      return false;
   }

   public function updateAdmin(bool $isAdmin): bool
   {
      $this->isAdmin = $isAdmin;
      return false;
   }
}
