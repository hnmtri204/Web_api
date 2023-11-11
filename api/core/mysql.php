<?php
define('DB_NAME', 'shop');
define('DB_USER', 'root');
define('DB_USER_PASS', '');

function get_pdo(){
    $pdo = null;
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_USER_PASS);     
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } 
    catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }

    return $pdo;
}

?>