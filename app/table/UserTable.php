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
   public bool $isAdmin = false;

   //php class constructor
   
   public function __construct()
   {
      parent::__construct();
   }

   public function insertUser(string $email, string $password, bool $isAdmin):int|null
   {
      $sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email, :password, :isAdmin)';
      $arrayBind = [':email'=>$email,':password'=> $password,':isAdmin'=> $isAdmin];
      return $this->insertQuery($sqlQuery,$arrayBind);
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
