<?php
    require ('C:\xampp\htdocs\Final Project\model\m_user.php');

    // if (isset ($_POST)) {
    //     $username = $_POST['user_name'];
    //     $password = $_POST['user_pass'];

    //     $new_user = new User();
    //     $this_user = $new_user->signin_user($username, $password);

    //     if ($this_user == null) {
    //         $error = "Wrong password or username.";
    //         header("Location: index.php?valid = $error");
    //     }
    // }
    if( isset( $_POST ) ){
        $username = $_POST['user_name'];
        $password = $_POST['user_pass'];

        $role = 1;
       
        $new_user = new User();
       
        $this_user = $new_user->signin_user($username, $password);

        if ($this_user == null)
        {
            $error = 'Sai mật khẩu hoặc tài khoản';

            header("Location: ../signin.php?valid=$error");
        }
        else
        {
            echo 'Welcome. <a href="C:\xampp\htdocs\Final Project\index.php">Proceed to the forum overview</a>.';
            header("Location: ../index.php");
        }
    }
?>