<?php
/*
* By Stefan Schumacher
*/
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
   
   public function insert(string $email, string $password)
   {
      require_once('./app/table/QueryProvider.php');
      $qp = new QueryProvider();
      $sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email,:password,:isAdmin)';
      $arrayBind = [':email'=> $email,':password'=>$password,':isAdmin'=>false];
      $userId = $qp->insertQuery($sqlQuery,$arrayBind);
      
   }

   public function delete(string $email, string $password): bool
   {
      // if user mit email und password existieren

      require_once('./app/table/QueryProvider.php');
      $qp = new QueryProvider();
      $deleteQuery = 'DELETE FROM users WHERE email = :email && password = :password';
      $arrayBindDelete = [':email'=>$email, ':password'=>$password];
      $qp->deleteQuery($deleteQuery,$arrayBindDelete);
      return true;
   }

   public function updatePassword(string $email,string $password)
   {      
    require_once('./app/table/QueryProvider.php');
    $qp = new QueryProvider();
    $updateQuery = 'UPDATE users SET password = :password WHERE email = :email';    
    $arrayUpdateBindValue = [':password' => $password, ':email' => $email];
    $qp->updateQuery($updateQuery,$arrayUpdateBindValue);   
      
   }

   public function updateAdmin(string $email, bool $isAdmin)
      {
      require_once('./app/table/QueryProvider.php');
      $qp = new QueryProvider();
      $updateQuery = 'UPDATE users SET isAdmin = :isAdmin WHERE email = :email';
      $arrayUpdateBindValue = [':email'=> $email , ':isAdmin' => $isAdmin];
      $qp->updateQuery($updateQuery,$arrayUpdateBindValue);
      
   }
}
