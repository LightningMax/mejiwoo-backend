<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use Mini\Core\Router;

// Table des routes minimaliste
$routes = [
    ['GET', '/', [Mini\Controllers\HomeController::class, 'index']],
    
    ['GET', '/register', [Mini\Controllers\RegisterController::class, 'index']],
    ['POST', '/register', [Mini\Controllers\RegisterController::class, 'register']],
    
    ['GET', '/login', [Mini\Controllers\LoginController::class, 'index']],
    ['POST', '/login', [Mini\Controllers\LoginController::class, 'login']],
    ['GET', '/logout', [Mini\Controllers\LoginController::class, 'logout']],
    
    ['GET', '/dashboard', [Mini\Controllers\DashboardController::class, 'index']],
    
    ['GET', '/products', [Mini\Controllers\ProductsController::class, 'index']],
    ['GET', '/products/product-detail', [Mini\Controllers\ProductsController::class, 'showProductDetail']],
    
    ['GET', '/cart', [Mini\Controllers\CartController::class, 'index']],
    ['POST', '/add-to-cart', [Mini\Controllers\CartController::class, 'addToCart']],
    
    ['GET', '/admin', [Mini\Controllers\AdminController::class, 'index']],
    ['POST', '/admin', [Mini\Controllers\AdminController::class, 'index']],
    ['POST', '/admin/add-product', [Mini\Controllers\AdminController::class, 'addProduct']],
];

// Bootstrap du router
$router = new Router($routes);
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);


