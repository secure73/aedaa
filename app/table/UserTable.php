<?php

namespace App\Table;
use Table\Database\QueryProvider;
require_once('./app/table/QueryProvider.php');


class UserTable
{

   public int $id;
   public string $email;
   public string $password;
   // when we have boolean var, please use "is" before variable
   public bool $isAdmin;

   //php class constructor
   
  



   public function insert(string $email, string $password, bool $isAdmin):int|null
   {
    
      $sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email, :password, :isAdmin)';
      $arrayEmail = [':email'=>$email,':password'=> $password,':isAdmin'=> $isAdmin];
      return 1;
   }

   public function delete(int $id): bool
   {
      $deleteQuery = 'DELETE FROM users WHERE id = :id';
      $arrayEmailDelete = [':id'=>$id];
      return false;
   }
   
   public function updatePassword(string $password, int $id): bool
   {
   $updateQuery = 'UPDATE users SET password = :password WHERE id = :id';
   $arrayUpdatePassValue = [':password'=> $password, ':id'=>$id];
   return false;
      
   }

   public function updateAdmin(int $id, bool $isAdmin): bool
   {
      $updateQuery = 'UPDATE users SET isAdmin =:isAdmin WHERE id = :id';
      $arrayPassSSSUpdate = [':isAdmin'=> $isAdmin,':id'=>$id];
      return false;
      
   }
}