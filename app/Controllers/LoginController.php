<?php

declare(strict_types=1);
namespace Mini\Controllers;

use Mini\Core\Controller;
use Mini\Models\User;

final class LoginController extends Controller
{
    public function index(): void
    {
        // Vérifier si l'utilisateur est déjà connécté et le rédiriger vers son dashboard
         session_start();
        if(isset($_SESSION['user_id'])) {
            header('Location: /dashboard');
            exit;
        }

        $this->render('login/index', params: [

        ]);
    }

    public function login() {
        session_start();
        
        // Vérifier les donnés du formulaire
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = User::findByEmail($email);

        if(!$user || $user === null) {
            header('Location: /login');
            exit;
        }

        if(!password_verify($password, $user['password'])) {
            header('Location: /login');
            exit;
        }

        // Connecter l'utilisateur et le rediriger vers son dashboard
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_firstname'] = $user['firstname'];

        header('Location: /dashboard');
        exit;
    }

    function logout() {
        session_start();
        session_destroy();

        header('Location: /login');
        exit;
    }
}