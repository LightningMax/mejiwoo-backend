<?php

declare(strict_types=1);
namespace Mini\Controllers;

use Mini\Core\Controller;
use Mini\Models\Product;

final class CartController extends Controller
{
    public function index(): void
    {
        session_start();

        $message = '';

        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if(empty($_SESSION['cart'])) {
            $message = 'Cart is empty';

            $this->render('cart/index', params: [
                'message' => $message
            ]);
            exit;
        }

        $products = [];

        foreach($_SESSION['cart'] as $product => $quantity) {
            $products[] = [
                'product' => Product::findById($product),
                'quantity' => $quantity
            ];
        }

        $this->render('cart/index', params: [
            'products' => $products,
            'message' => $message
        ]);
    }

    public function addToCart(): void {
        session_start();

        $product_id = (int)$_POST['product_id'];
        $quantity = (int)$_POST['quantity'];

        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] += $quantity;
            return;
        }

        $_SESSION['cart'][$product_id] = $quantity;

        // $this->render('cart/index', params: [
        //    'quantity' => $quantity, 
        //    'product' => Product::findById($product_id), 
        // ]);
    }
}