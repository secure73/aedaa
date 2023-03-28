<?php
<<<<<<< HEAD

namespace App;

class User
{
    public int $id;
    public string $email;
    public string $password;
    // when we have boolean var, please use "is" before variable
    public bool $isAdmin;
=======

namespace App\Model;
>>>>>>> dev

use App\Table\UserTable;

require_once('./app/table/UserTable.php');
class User extends UserTable
{
    public function __construct()
    {
<<<<<<< HEAD
    }

/**return int in case of success
*return falsw in case of unsuccess
**/
public function create(string $email, string $password): int
{
    return 1;
}
=======
        parent::__construct();
    }
>>>>>>> dev

public function makeUserAdmin(string $email): bool
{
    return false;
}

<<<<<<< HEAD
public function removeAdmin(string $email): bool
{
    return false;
}

/**
 * return user if User existed
 * return false if User cannot be found, or email dosent existed
 * **/
public function findUserByEmail(string  $email): User|false
=======
public function create(string $email, string $password): int|null
{
    $password = $this->hashPassword($password);
    return $this->insert($email, $password, false);
}

public function makeUserAdmin(string $email): bool
>>>>>>> dev
{
    return false;
}

<<<<<<< HEAD
public function login(string $email, string $password): bool
=======
public function removeAdmin(string $email): bool
>>>>>>> dev
{
    return false;
}

<<<<<<< HEAD
=======
/**
 * return user if User existed
 * return false if User cannot be found, or email dosent existed
 * **/
public function findUserByEmail(string  $email): User|false
{
    return false;
}

public function login(string $email, string $password): bool
{
    return false;
}

>>>>>>> dev
public function logout(): void
{
}
/**
 * @return array<User> can be aray of null
 */
public function getUsers(): array
{
    $arrayUsers = [];
    //code to get all users from database
    return $arrayUsers;
}
<<<<<<< HEAD
=======


private function hashPassword($password): string
{
    $options = [
      'memory_cost' => 2048,
      'time_cost' => 4,
      'threads' => 2
    ];
    $hash = password_hash($password, PASSWORD_ARGON2ID, $options);
    return $hash;
}

  private function verifyPassword(string $password, string $hash): bool
  {
      if (password_verify($password, $hash)) {
          return true;
      } else {
          return false;
      }
  }
>>>>>>> dev
}
