<?php
require('../models/users.php');
$data['title'] = 'User module';

if ($_POST) 
{
    $user = new users();
    if (strlen($_POST['user_name'])>20) {
        echo "The user name is too long, please insert a name of 20 character";
        return;
    }
    if (strlen($_POST['user_email'])>20) {
        echo "The user email is too long, please insert a email of 20 character";
        return;
    }
    if (strlen($_POST['user_password'])>8) {
        echo "The user password is too long, please insert a password of 8 character";
        return;
    }
    $user->user_name = $_POST['user_name'];
    $user->user_email = $_POST['user_email'];
    $user->user_password = $_POST['user_password'];
    
    if ($user->insert_user()) {
        session_start();
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->user_name;
        $_SESSION['user_email'] = $user->user_email;
        echo true;
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