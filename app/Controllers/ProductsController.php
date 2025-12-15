<?php

declare(strict_types=1);
namespace Mini\Controllers;

use Mini\Core\Controller;
use Mini\Models\Product;

final class ProductsController extends Controller
{
    public function index(): void
    {
        $this->render('products/index', params: [
            'products' => Product::getAll(),
        ]);
    }

    public function showProductDetail() {
        $id = $_GET['id'] ?? null;

        if ($id === null || !is_numeric($id)) {
            header('Location: /products');
            return;
        }

        $product = Product::findById($id);

        if($product === false || $product === null) {
            header('Location: /products');
            return;
        }
   
        $this->render('products/product-detail', [
            'product' => $product,
        ]);
    }
}