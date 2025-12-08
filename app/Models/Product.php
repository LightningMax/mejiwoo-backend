<?php

// Ici je définit le namespace ou il y aura ma class
namespace Mini\Models;

use Mini\Core\Database;
use PDO;

class Product
{
    private $id;
    private $nom;
    private $price;
    private $quantity;
    private $image;
    private $category;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    // =====================
    // Méthodes CRUD
    // =====================

    /**
     * Récupère tous les produits
     * @return array
     */
    public static function getAll()
    {
        $pdo = Database::getPDO();
        $stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Récupère un produit par son ID
     * @param int $id
     * @return array|null
     */
    public static function findById($id)
    {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    /**
     * Récupère un produit par categorie
     * @param int $id
     * @return array|null
     */
    public static function findByCategory($category)
    {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare("
        SELECT * FROM products 
        WHERE id_category = (
            SELECT id FROM categories WHERE title = :category
        )
    ");
        $stmt->execute(['category' => $category]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // /**
    //  * Crée un nouvel utilisateur
    //  * @return bool
    //  */
    // public function save()
    // {
    //     $pdo = Database::getPDO();
    //     $stmt = $pdo->prepare("INSERT INTO user (nom, email) VALUES (?, ?)");
    //     return $stmt->execute([$this->nom, $this->email]);
    // }

    // /**
    //  * Met à jour les informations d’un utilisateur existant
    //  * @return bool
    //  */
    // public function update()
    // {
    //     $pdo = Database::getPDO();
    //     $stmt = $pdo->prepare("UPDATE user SET nom = ?, email = ? WHERE id = ?");
    //     return $stmt->execute([$this->nom, $this->email, $this->id]);
    // }

    // /**
    //  * Supprime un utilisateur
    //  * @return bool
    //  */
    // public function delete()
    // {
    //     $pdo = Database::getPDO();
    //     $stmt = $pdo->prepare("DELETE FROM user WHERE id = ?");
    //     return $stmt->execute([$this->id]);
    // }
}
