<?php
require_once './core/db_product.php';
header('Access-Control-Allow-Origin: *');

if(isset($_GET['category_id'])){
    $categoryId = $_GET['category_id'];
    $productList = get_products_by_category($categoryId);
    
    echo json_encode($productList);
}