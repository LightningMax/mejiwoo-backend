<?php

declare(strict_types=1);
namespace Mini\Controllers;

use Mini\Core\Controller;

final class DashboardController extends Controller
{
    public function index(): void
    {
        session_start();

        if(!isset($_SESSION["user_id"])) {
            header("Location: /login");
            return;
        }

        $this->render('dashboard/index', params: [

        ]);
    }
}