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
   
   public function insert(string $email, string $password, bool $isAdmin): int
   {require_once('./app/table/QueryProvider.php');
      $sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email,:password,:isAdmin)';
      $arrayBind = [':email'=>$email,':password'=>$password,':isAdmin'=>$isAdmin];
      $userId = $qp->insertQuery($sqlQuery,$arrayBind);

      return 1;
   }
   public function selectByEmail(string $email): int
   { $qp = new QueryProvider();
       $selectQuery = 'SELECT FROM users WHERE id = :id';
      $arrayBinSelect = [':email'=>$email];
      $qp->selectQuery($selectQuery,$arrayBinSelect);

      return 1;
   }
   public function delete(int $id, ): bool
   { $qp = new QueryProvider();
      $deleteQuery = 'DELETE FROM users WHERE id = :$id';
      $arrayBindDelete = [$id];   
      $qp->deleteQuery($deleteQuery,$arrayBindDelete);
      return false;
   }
   public function updatePassword(string $email,string $password): bool
   {  $qp = new QueryProvider();
      $updateQuery = 'UPDATE users SET password = :password WHERE email= :email';
      $arrayUpdateBindValue = [':email'=>$email, ':password' => $password];
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
