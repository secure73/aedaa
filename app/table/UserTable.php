<?php

namespace App\Table;

// create 
//add / delete / insert / update functions
//work on database

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
      return 1;
   }
   public function delete(string $email, string $password): bool
   {
      return false;
   }
   public function updatePassword(string $password): bool
   {
      return false;
   }

   public function updateAdmin(bool $isAdmin): bool
   {
      return false;
   }
}
