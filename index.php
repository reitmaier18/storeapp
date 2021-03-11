<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = null;
    $_SESSION['user_name'] = null;
    $_SESSION['user_email'] = null;        
}
/*
print_r($_SESSION);
die();
*/
require('views/common/header.php');
require('views/common/navbar.php');
?>
<div class="frame">
<?php require 'controllers/products_list.php'; ?>
</div>
<?php
require('views/common/modal.php');
?>
<?php
require('views/common/footer.php');
?>