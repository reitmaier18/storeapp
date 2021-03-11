<?php
require 'models/shop_cart.php';
if (!class_exists('products')) {
    require 'models/products.php';
}

if (($_SESSION['user_id'] = $_SESSION['user_id'] ? $_SESSION['user_id'] : null)!==null) 
{
    $balance['menu'] = [
        'History' => "<a class='dropdown-item' onclick='history_payment()'>History</a>",
        'Pay' => "<a class='dropdown-item' onclick='payment_detail()'>Pay</a>",
    ];
    $shop_cart = new shop_cart();
    $result = $shop_cart->list_shop_cart_count($_SESSION['user_id']);
    $resul = $shop_cart->list_shop_cart_count($_SESSION['user_id']);
    
    $cart['count'] = 0;
    $cart['menu'] = array();
    foreach ($result as $key => $value) 
    {
        $product = new products();
        $product->find_products($value->product_id);
        if ($value) 
        {
            $cart['menu'][$key] = '<a class="dropdown-item" onclick="productDetail('.$value->product_id.')">'.$value->quantity.' '.$value->product_name.'</a>';
            $cart['count'] = $cart['count']+$value->quantity;
        }
        else
        {
            $cart['menu']['end'] = '<a class="dropdown-item">Please add a product to the cart</a>';
        }
    }
    
    $user['name'] = $_SESSION['user_name'];
    $user['menu'] = [
        'logout' => "<a class='dropdown-item' onclick='user_logout()'>Logout</a>"
    ];
}
else
{
    $balance['menu'] = [
        'History' => "<a class='dropdown-item' onclick='history_payment()'>History</a>",
        'Pay' => "<a class='dropdown-item' onclick='payment_detail()'>Pay</a>",
    ];
    $cart['count'] = 0;
    $cart['menu']['end'] = '<a class="dropdown-item">Please add a product to the cart</a>';
    $user['name'] = '';
    $user['menu'] = array(
        'login' => "<a class='dropdown-item' onclick='user_login()'>Login</a>"
    );

}
?>