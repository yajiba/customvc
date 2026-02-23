<?php
require_once 'core/Database.php';
class ProductModel
{
    public static function addProduct($post) {
        $name = $_POST['product_name'];  // Assuming you are getting this from the form
        $desc = $_POST['description'];   // Assuming you are getting this from the form
        
        // Ensure data is sanitized (basic form of sanitation)
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $desc = htmlspecialchars($desc, ENT_QUOTES, 'UTF-8');
        
        // Connect to the database
        $db = Database::connect();
        
        // Prepare the SQL statement with placeholders to prevent SQL injection
        $stmt = $db->prepare('INSERT INTO products (name, description) VALUES (:name, :desc)');
        
        // Bind the parameters to the prepared statement
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':desc', $desc);
        
        // Execute the statement and check if it was successful
        if ($stmt->execute()) {
            // Check if the insert was successful, get the last inserted ID (optional)
            $lastId = $db->lastInsertId();
           return 1;
        } else {
            // If execution fails, show an error
            return 0;
        }
        
    
    }
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