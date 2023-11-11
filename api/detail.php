<?php
require_once './core/db_product.php';
header('Access-Control-Allow-Origin: *');

if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];
    $product = find_product($productId);

    echo json_encode($product);
}