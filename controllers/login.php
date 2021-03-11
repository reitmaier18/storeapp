<?php
    require('../models/users.php');
    
    if ($_POST) 
    {
        $user = new users();
        $user->validate_user($_POST['user_email'], $_POST['user_password']);
        if ($user->id==null) 
        {
            echo "you don't have permission for access";
        }
        else
        {
            session_start();
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->user_name;
            $_SESSION['user_email'] = $user->user_email;
            

            echo true;
        }
    }
    else
    {
        require '../views/common/login.php';
    }
    

?>