<?php
session_start();
require '../models/shop_cart.php';
require '../models/products.php';
if (!($_SESSION['user_id'] = $_SESSION['user_id']?$_SESSION['user_id']:null)) 
{
    $_POST = null;
    require 'login.php';
}

$shop_cart = new shop_cart();
$shop_cart->user_id = $_SESSION['user_id'];
$shop_cart->product_id = $_POST['id'];
$shop_cart->shipping_id = $_POST['shipping'];
$shop_cart->insert_shop_cart();

echo true;


?>