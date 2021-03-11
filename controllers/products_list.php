<?php
if (!class_exists('products')) {
    require 'models/products.php';
}
$products = new products();
$data['list'] = $products->list_products();
$data['title'] = 'Products module';
$data['subtitle'] = 'Products list';
require 'views/products/index.php';
?>