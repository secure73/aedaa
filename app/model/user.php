<?php 
namespace App;
class User{
    public int $id;
    public string $email;
    public string $password;    
    //when we have boolean type variable, please use "is" before the variableName
    public bool $isAdmin;

    //php class constructor
    public function __construct()
    {
        
    }

    /**
     * @return int in case of success return last inserted id
     * @return false in case of unsuccessfull creation return false
     */
    public function createNewUser(string $email, string $password):int
    {
        return 1;
    }


    public function makeUserAdmin(string $email):bool
    {
        return false;
    }

    public function removeAdmin(string $email): bool
    {
        return false;
    }
    /**
     * @return User if user exists
     * @return false if user cannot be found, or email doesnt exists in our database
     */
    public function findUserbyEmail(string $email):User|false
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
     * @return $array<User> can be NULL
     */
    public function getUsers():array
    {
        $arrayUsers = [];
        //code to get all users from database
        return $arrayUsers;
    }

}
?>