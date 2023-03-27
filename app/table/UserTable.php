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


   public function selectByEmail(string $email)
   {
      $sqlQuery = 'SELECT * FROM users WHERE email = :email';
      $arrayBind = [':email'=>$email];
      return $this->selectQuery($sqlQuery,$arrayBind);
   }
   
   public function insert(string $email, string $password , bool $isAdmin = false):int|null
   {
      $sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email,:password,:isAdmin)';
      $arrayBind = [':email'=> $email,':password'=>$password,':isAdmin'=>$isAdmin];
      return $this->insertQuery($sqlQuery,$arrayBind);
   }

   public function deleteById(int $id): int|null
   {
      $deleteQuery = 'DELETE FROM users WHERE id = :id';
      $arrayBindDelete = [':id'=>$id];
      return $this->deleteQuery($deleteQuery,$arrayBindDelete);
   }

   public function updatePasswordByEmail(string $email,string $password):int|null
   {      
    $updateQuery = 'UPDATE users SET password = :password WHERE email = :email';    
    $arrayUpdateBindValue = [':password' => $password, ':email' => $email];
    return $this->updateQuery($updateQuery,$arrayUpdateBindValue); 
   }

   public function updateAdminStatusByEmail(string $email, bool $isAdmin):int|null
      {
      $updateQuery = 'UPDATE users SET isAdmin = :isAdmin WHERE email = :email';
      $arrayUpdateBindValue = [':email'=> $email , ':isAdmin' => $isAdmin];
       return $this->updateQuery($updateQuery,$arrayUpdateBindValue);
   }
}