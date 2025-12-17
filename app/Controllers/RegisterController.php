<?php

declare(strict_types=1);
namespace Mini\Controllers;

use Mini\Core\Controller;
use Mini\Models\User;

final class RegisterController extends Controller
{
    public function index(): void
    {
        $this->render('register/index', params: [

        ]);
    }

    public function register() {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        if(User::findByEmail($email)) {
            header('Location: /login');
            exit;
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $user = new User($firstname, $lastname, $email, $hashed_password);
        if($user->save()) {
            header('Location: /login');
            exit;
        }
    }
}