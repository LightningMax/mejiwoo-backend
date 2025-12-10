<?php

declare(strict_types=1);
namespace Mini\Controllers;

use Mini\Core\Controller;
use Mini\Models\Category;
use Mini\Models\Product;

final class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home/index', params: [
            'seasons' => Category::findByType('season'),
            'best_seller' => Product::findByCategory('Our Best Seller'),
        ]);
    }
}