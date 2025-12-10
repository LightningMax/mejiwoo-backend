<?php

namespace Mini\Models;

use Mini\Core\Database;
use PDO;

class Category
{
    private $id;
    private $title;
    private $type;
    private $image_url;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setNom($title)
    {
        $this->title = $title;
    }
    
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Récupère tous les categories
     * @return array
     */
    public static function getAll()
    {
        $pdo = Database::getPDO();
        $stmt = $pdo->query("SELECT * FROM categories ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Récupère une categorie par son ID
     * @param int $id
     * @return array|null
     */
    public static function findById($id)
    {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    /**
     * Récupère une categorie par type
     * @param int $type
     * @return array|null
     */
    public static function findByType($type)
    {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare("
        SELECT * FROM categories 
        WHERE type = :type
    ");
        $stmt->execute(['type' => $type]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
