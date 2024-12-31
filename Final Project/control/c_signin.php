<?php
    require ('C:\xampp\htdocs\Final Project\model\m_user.php');

    if( isset( $_POST ) ){
        $username = $_POST['user_name'];
        $password = $_POST['user_pass'];

        $role = 1;
       
        $new_user = new User();
       
        $this_user = $new_user->signin_user($username, $password);

        if ($this_user == null) {
            $error = 'Sai mật khẩu hoặc tài khoản';
            header("Location: ../signin.php?valid=$error");
            exit();
        } 
        else {
            $_SESSION['username'] = $this_user['username'];
            $_SESSION['role'] = $this_user['role']; 
    
            header("Location: ../index.php");
            exit();
        }
    }
?>