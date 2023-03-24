<?php
namespace App;
<<<<<<< HEAD

class User {
    public int $id;
    public string $email;
    public string $password;
    // when we habe boolean type variable, please use "is" before the variableName 
    public bool $isAdmin;

    //php class constructor
    public function __construct()
    {
        return;
    }

    /**
     * @return int in case of success return last inserted id from creatd User
     * @return false in case of unseccessfull creation return false
     */
    public function createUser(string $email , string $password):int|false
    {
        
        return false;
    }


    public function makeUserAdmin(string $email):bool
    {
        return false;
    }

    public function removeAdmin(string $email):bool
    {
        return false;
    }
    /**
     * @return User if user existed
     * @return false if user cannot be found, or email dosent existed in out Database
     */
    public function findUserByEmail(string $email):User|false
    {
        return false;
    }

    
    public function login(string $email , string $password):bool
    {
        return false;
    }

    public function logout():void
    {

    }

    /**
     *@return array<User> can ne array of null
     */	
    public function getUsers():array
    {
        $arrayUsers =[];
        //code to get all users from database
        return $arrayUsers;
    }
=======
class User{
   public int $id;
   public string $email;
   public string $password;
   // when we have boolean var, please use "is" before variable
   public bool $isAdmin;

//php class constructor
   public function __construct() {

   }
   
/**return int in case of success 
*return falsw in case of unsuccess
**/ 
public function create(string $email, string $password):int{
   return 1;   
}

public function makeUserAdmin(string $email):bool{
   return false;   
}

public function removeAdmin(string $email):bool{
   return false;   
}

/**
 * return user if User existed 
 * return false if User cannot be found, or email dosent existed
 * **/
public function findUserByEmail(string  $email):User|false
{
   return false;   
}

public function login(string $email, string $password):bool
{
   return false;   
}

public function logout():void{}  
/**
 * @return array<User> can be aray of null
 */
public function getUsers():array {
$arrayUsers = [];
//code to get all users from database
return $arrayUsers;
}
>>>>>>> origin/Zimmermann




}