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
$shop_cart->id = $_POST['id'];
$shop_cart->delete_shop_cart();

echo true;


?>