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
   
   public function insert(string $email, string $password): int
   {require_once('./app/table/QueryProvider.php');
      $sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email,:password,:isAdmin)';
      $arrayBind = [':email'=>'myemail@gmail.com',':password'=>'sajhdjadd',':isAdmin'=>true];
      $userId = $qp->insertQuery($sqlQuery,$arrayBind);

      return 1;
   }
   public function selectByEmail(string $email): int
   { $qp = new QueryProvider();
       $selectQuery = 'SELECT FROM users WHERE id = :id';
      $arrayBinSelect = [':email'=>'myemail@gmail.com'];
      $qp->selectQuery($selectQuery,$arrayBinSelect);

      return 1;
   }
   public function delete(string $email, string $password): bool
   { $qp = new QueryProvider();
      $deleteQuery = 'DELETE FROM users WHERE id = :id';
      $arrayBindDelete = [':id'=>3];   
      $qp->deleteQuery($deleteQuery,$arrayBindDelete);
      return false;
   }
   public function updatePassword(string $password): bool
   {  $qp = new QueryProvider();
      $updateQuery = 'UPDATE users SET email= :email , password = :password , isAdmin= :isAdmin WHERE id = :id';
      $arrayUpdateBindValue = [':email'=>'newEmail@gmail.com' , ':password' => 'ewpass' , ':isAdmin' => false , ':id'=>1];
      $qp->updateQuery($updateQuery,$arrayUpdateBindValue);
      
      return false;
   }

   public function updateAdmin(bool $isAdmin, string $email): bool
   {$qp = new QueryProvider();
      $updateQuery = 'UPDATE users SET isAdmin = :isAdmin WHERE email = :email';
      $arrayUpdateBindValue = [':email'=> $email , ':isAdmin' => $isAdmin];
      $qp->updateQuery($updateQuery,$arrayUpdateBindValue);
      return false;
   }
}
