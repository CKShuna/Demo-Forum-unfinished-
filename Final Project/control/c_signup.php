<?php
    require('../model/m_user.php');

    session_start();

    if( isset( $_POST ) ){
        $username = $_POST['user_name'];
        $password = $_POST['user_pass'];
        $email = $_POST['user_email'];
        $role = 1;
        
        $new_user = new User();
        
        $new_user->create_1_user( $username, $password, $email, $role );

        header("Location: ../index.php");
    }



?>