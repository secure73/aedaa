<?php
namespace App\Controller;
use App\Model\User;
require_once('./app/model/User.php');

class RegisterController {

    public static function register ()
    {

        if(isset($_POST['email']) && isset($_POST['password']))
        {
            if(self::checkIfUserExisted())
            {
                echo "user Exists";
            }
            else {
                echo "alles gut";
            }
        }

    }

    private static function checkIfUserExisted():bool
    {
        $user = new User();
        $found = $user->selectByEmail($_POST['email']);
        return false;
    }



}



?>