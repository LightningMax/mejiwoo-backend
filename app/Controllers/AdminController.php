<?php

declare(strict_types=1);
namespace Mini\Controllers;

use Mini\Core\Controller;

final class AdminController extends Controller
{
    public function index(): void
    {
        $this->render('admin/index', params: [
            
        ]);
    }

    public function addProduct(): void
    {
        // Check if POST is empty (direct access)
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /admin');
            exit;
        }

        // Sanitize & fetch inputs
        $name     = trim($_POST['name'] ?? '');
        $price    = floatval($_POST['price'] ?? 0);
        $quantity = intval($_POST['quantity'] ?? 0);
        $image    = trim($_POST['image'] ?? '');
        $category = intval($_POST['id_category'] ?? 0);

        // Basic validation
        $errors = [];

        if ($name === '') $errors[] = "Name is required";
        if ($price <= 0) $errors[] = "Price must be greater than 0";
        if ($quantity < 0) $errors[] = "Quantity cannot be negative";
        if ($category <= 0) $errors[] = "Category ID must be valid";

        // If errors, show them in the view
        if (!empty($errors)) {
            $this->render('admin/index', params: [
                'errors' => $errors,
            ]);
            return;
        }

        $productModel = new \Mini\Models\Product();
        $productModel->insert([
            'name'     => $name,
            'price'    => $price,
            'quantity' => $quantity,
            'image'    => $image,
            'id_category' => $category,
        ]);

        // Redirect back to admin
        header('Location: /admin?success=1');
        exit;
    }

}