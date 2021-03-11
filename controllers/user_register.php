<?php
require('../models/users.php');
$data['title'] = 'User module';
if ($_POST) 
{
    $user = new users();
    $user->user_name = $_POST['user_name'];
    $user->user_email = $_POST['user_name'];
    $user->user_password = $_POST['user_password'];
    if ($user->insert_user()) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->user_name;
        $_SESSION['user_email'] = $user->user_email;
        return true;
    }
    else
    {
        echo "error!";
    }
}
else
{
    $data['subtitle'] = 'Register form';
    require '../views/users/form.php';
}
?>