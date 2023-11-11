<?php
require_once './core/db_category.php';
header('Access-Control-Allow-Origin: *');

$categoryList = get_all_categories();
echo json_encode($categoryList);