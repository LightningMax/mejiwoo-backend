<?php

declare(strict_types=1);
namespace Mini\Controllers;

use Mini\Core\Controller;

final class ProductsController extends Controller
{
    public function index(): void
    {
        $this->render('products/index', params: [
            
        ]);
    }
}