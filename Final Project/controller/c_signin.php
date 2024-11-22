<?php
    require ('C:\xampp\htdocs\Final Project\model\m_user.php');

    if (isset ($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $new_user = new User();
        $this_user = $new_user->signin_user($username, $password);

        if ($this_user == null) {
            $error = "Wrong password or username.";
            header("Location: C:\xampp\htdocs\Final Project\index.php?valid=$error");
        }
    }
?>