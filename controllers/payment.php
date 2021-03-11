<?php
require '../models/payment.php';
require '../models/shop_cart.php';
require '../models/balance.php';
session_start();
$data['title'] = 'Payment module';
$data['subtitle'] = 'Payment list';
if (!isset($_SESSION['user_id'])) {
    $data['warning'] = 'Please login for see this page';
}
else{
    $shop_cart = new shop_cart();
    $data['to_pay'] = $shop_cart->list_shop($_SESSION['user_id']);
}

if ($_POST) {
    $balance = new balance();
    $balance->find_last_balance($_SESSION['user_id']);
    $balance->previous_amount = $balance->current_amount;
    $balance->current_amount = $balance->current_amount-$_POST['total'];
    $balance->insert_balance();


    $payment = new payment();
    $payment->base = $_POST['base'];
    $payment->tax = $_POST['tax'];
    $payment->total = $_POST['total'];
    $payment->insert_payment();
    
    foreach ($data['to_pay'] as $key => $value) {
        $shop_cart = new shop_cart();
        $shop_cart->find_shop_cart($value->id);
        $shop_cart->payment_id = $payment->id;
        $shop_cart->update_shop_cart();
    }
    
    echo true;
    die();
}
require '../views/payment/form.php';
?>