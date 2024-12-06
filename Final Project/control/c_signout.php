<?php
// session_start();
// session_destroy();
// header("Location: index.php");
// exit;

session_start();

    if( isset( $_POST ) ){
        session_destroy();
        echo 'You have logged out.';
        echo '<a href="index.php">Return to Home</a>';

        header("Location: ../index.php");
    }

    // if (isset($_GET['redirect'])) {
    //     header("Location: index.php");
    //     exit;
    // }

    exit;
?>