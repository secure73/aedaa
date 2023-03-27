<?php

namespace App\Controller;

use App\Model\User;

require_once('./app/model/User.php');

class RegisterController
{
    public string $message;
    public bool $success;
    private string $email;
    private string $password;

    public function __construct()
    {
        $this->email = "";
        $this->password = "";
        $this->message = "";
        $this->success = false;
    }

    public function register()
    {
        $this->checkUserInput();
        if($this->email && $this->password)
        {
            if (self::checkIfUserExisted()) {
                $this->message = "user Exists";
            } else {
                $newUser = new User();
                $result = $newUser->register($_POST['email'], $_POST['password']);
                if ($result) {
                    $this->success = true;
                    $this->message = "successfull registered";
                }
            }
        }
    }

    private function checkUserInput()
    {
        if (isset($_POST['email'])) {
            $this->email = $_POST['email'];
            $this->checkEmailFormatValidity();
        }
        if (strlen($_POST['password'])>3) {
            $this->password = $_POST['password'];
        } else {
            $this->message = "password lenght must be minimum 4 charechter";
        }
    }

    private function checkEmailFormatValidity(): bool
    {
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

        // Teste die E-Mail-Adresse gegen das Muster
        if (preg_match($pattern, $this->email)) {
            return true; // Gültige E-Mail
        } else {
            $this->email = "";
            $this->message = "Email format is invalid";
            return false; // Ungültige E-Mail
        }
    }

    private static function checkIfUserExisted(): bool
    {
        $user = new User();
        if ($user->selectByEmail($_POST['email'])) {
            return true;
        }
        return false;
    }
}
