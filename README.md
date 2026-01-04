# Utilisation

## Installer les dependances:

```bash
composer install
```

- Changez le fichier config.ini avec les identifiants BDD

## Creation de la BDD

```sql
CREATE DATABASE  IF NOT EXISTS `mejiwoo`
USE `mejiwoo`;
```

```sql
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

```sql
LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (4,'Max','REIS','max@email.com','$2y$10$IOv7jgM9n4vVj35Wqt9YO.cSDQkYcXzvJhx21rPwvyjIdSG.xJV8K');
UNLOCK TABLES;
```

```sql
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `id_category` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

```sql
LOCK TABLES `products` WRITE;
INSERT INTO `products` VALUES (1,'Euphoria Crop Blouse',23.99,30,'assets/images/Euphoria_Crop_Blouse.png',4),(2,'Venus Halter Dress',34.99,30,'assets/images/Venus_Halter_Dress.png',4),(3,'Snap Pure Blouse',24.99,30,'assets/images/Snap_Pure_Blouse.png',4),(4,'Eto V Neck Yellow',19.00,30,'assets/images/yellow_dress.png',5);
UNLOCK TABLES;
```

```sql
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

```sql
LOCK TABLES `categories` WRITE;
INSERT INTO `categories` VALUES (1,'SPRING','spring','season','assets/images/frame_4.png'),(2,'SUMMER','summer','season','assets/images/frame_5.png'),(3,'WINTER','winter','season','assets/images/frame_6.png'),(4,'Our Best Seller','best-seller','best-seller',NULL),(5,'TOP','top','top',NULL);
UNLOCK TABLES;
```

```sql
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

## Demarrer le projet:

```bash
php -S localhost:8000 -t /public
```
