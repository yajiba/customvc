<?php
require_once 'core/Database.php';
class ProductModel
{
    
    public static function list() {
        // Connect to the database
        $db = Database::connect();
        $stmt = $db->prepare('SELECT p.image,p.product_id, p.name AS p_name, c.name AS c_name, p.description, p.price
                                FROM products p
                                LEFT JOIN categories c ON p.category_id = c.category_id
                                LIMIT 10;');
        $stmt->execute();

        // Fetch and return the product data
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }

    public static function productById($id)
    {
        // Connect to the database
        $db = Database::connect();

        // Execute a query to fetch user data by ID
        $stmt = $db->prepare("SELECT * FROM products WHERE product_id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Fetch and return the user data
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function productbyCategory($catID) {
        // Connect to the database
        $db = Database::connect();

          // Execute a query to fetch user data by ID
          $stmt = $db->prepare("SELECT p.product_id, p.name AS p_name, c.name AS c_name, p.description, p.price
                                    FROM products p
                                    LEFT JOIN categories c ON p.category_id = c.category_id
                                    WHERE c.category_id = $catID");
         // $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
  
          // Fetch and return the user data
          return $stmt->fetchall(PDO::FETCH_ASSOC);

    }
}

?>