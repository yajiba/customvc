<?php
require_once 'core/Database.php';
class OrderModel
{
    
    public static function list() {
        // Connect to the database
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * 
                            FROM orders o 
                            LEFT JOIN users u ON u.user_id = o.user_id
                            LEFT JOIN orderitems oi ON oi.order_id = o.order_id
                            LEFT JOIN products p ON p.product_id = oi.product_id
                            ');
        $stmt->execute();

        // Fetch and return the product data
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }
   
}

?>