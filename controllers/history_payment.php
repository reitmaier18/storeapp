<?php
require '../models/payment.php';
require '../models/balance.php';
session_start();
$data['title'] = 'Payment module';
$data['subtitle'] = 'Payment history';

if (!isset($_SESSION['user_id'])) {
    $data['warning'] = 'Please login for see this page';
}

$payment = new payment();
$data['result'] = $payment->list_payment($_SESSION['user_id']);


require '../views/payment/history.php';

?>