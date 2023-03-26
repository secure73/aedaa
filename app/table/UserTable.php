<?php

namespace App\Table;
use Table\Database\QueryProvider;
require_once('./app/table/QueryProvider.php');

class UserTable extends QueryProvider
{

   public int $id;
   public string $email;
   public string $password;
   // when we have boolean var, please use "is" before variable
   public bool $isAdmin;

   //php class constructor

   public function __construct()
   {
      parent::__construct();
   }
   
   public function insert(string $email, string $password, bool $isAdmin):int|null
   {
      $sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email, :password, :isAdmin)';
      $arrayBind = [':email'=>$email,':password'=> $password,':isAdmin'=> $isAdmin];
      return $this->insertQuery($sqlQuery,$arrayBind);
   }

   public function delete(int $id): bool
   {
      $deleteQuery = 'DELETE FROM users WHERE id = :id';
      $arrayBindDelete = [':id'=>$id];
      $this->deleteQuery($deleteQuery,$arrayBindDelete);
      return false;
   }
   
   public function updatePassword(string $password, int $id): bool
   {
   $updateQuery = 'UPDATE users SET password = :password WHERE id = :id';
   $arrayUpdateBindValue = [':password'=> $password, ':id'=>$id];
   $this->updateQuery($updateQuery,$arrayUpdateBindValue);
   return false;
      
   }

   public function updateAdmin(int $id, bool $isAdmin): bool
   {
      $updateQuery = 'UPDATE users SET isAdmin =:isAdmin WHERE id = :id';
      $arrayBindUpdate = [':isAdmin'=> $isAdmin,':id'=>$id];
      $this->deleteQuery($updateQuery,$arrayBindUpdate);
      return false;
      
   }
}