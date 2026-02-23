<?php
// app/models/UserModel.php
require_once 'core/Database.php';
class UserModel
{
    public static function getUserById($userId)
    {
        // Connect to the database
        $db = Database::connect();

        // Execute a query to fetch user data by ID
        $stmt = $db->prepare("SELECT * FROM users WHERE id = $userId");
       // $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
        $stmt->execute();

        // Fetch and return the user data
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function login($post)
    {
        // Connect to the database
        $db = Database::connect();
    
        // Prepare the SQL query with placeholders to avoid SQL injection
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username AND password_hash = :password");
    
        // Bind the user inputs to the placeholders
        $stmt->bindParam(':username', $post['username']);
        $stmt->bindParam(':password', $post['password']);
    
        // Execute the query
        $stmt->execute();
    
        // Fetch the user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Return the user data, or false if no matching user is found
        return $user ? $user : false;
    }
    

    public static function userList() {
        // Connect to the database
        $db = Database::connect();

        // Execute a query to fetch user data by ID
        $stmt = $db->prepare('SELECT * FROM users LIMIT 10');
        $stmt->execute();

        // Fetch and return the user data
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }

}

?>