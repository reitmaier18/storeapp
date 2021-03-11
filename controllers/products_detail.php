<?php
require '../models/products.php';
require '../models/shop_cart.php';
require '../models/shipping.php';

session_start();
if (!isset($_SESSION['user_id'])) 
{
    $_SESSION['user_id'] = null;
    $_SESSION['user_name'] = null;
    $_SESSION['user_email'] = null;        
}


$products = new products();
$products->find_products($_POST['id']);


$shop_cart = new shop_cart();
$result = $shop_cart->list_shop_cart($_SESSION['user_id']);

$shipping = new shipping();
$data['shipping_list'] = $shipping->list_shipping();


$data['title'] = $products->product_name;
$data['product'] = $products;

$data['boolvalue'] = false;
foreach ($result as $key => $value) 
{
    if ($value->product_id == $_POST['id']) 
    {
        $data['boolvalue'] = true;
        $data['shop_cart_id'] = $value->id;
    }
}

require '../views/products/detail.php';
?>