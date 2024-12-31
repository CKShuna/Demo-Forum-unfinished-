<?php include('template/head.php') ?>
<?php include('template/header.php') ?>

<!DOCTYPE html>
<html>
<head>
<style>
/* Add your styles here */
    body {
    font-family: Arial, Helvetica, sans-serif;
    }

    .container {
    padding: 16px;
    max-width: 400px;
    margin: auto;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 5px;
    }

    button {
    background-color: #04AA6D;
    color: white;
    padding: 14px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
    }

    button:hover {
    opacity: 0.8;
    }

    label {
    display: block;
    margin-top: 10px;
    }

    span.psw {
    float: right;
    padding-top: 10px;
    }

    .message {
    text-align: center;
    margin-top: 10px;
    }

    .message a {
    color: #04AA6D;
    text-decoration: none;
    }

    .message a:hover {
    text-decoration: underline;
    }
</style>
</head>
<body>

    <div class="container" id="signin">
        <h2>Sign In</h2>
        <form method="POST" action="control\c_signin.php">
            <div class="form-group">
                <label for="user_name">Username</label>
                <input type="text" id="user_name" name="user_name" required>
            </div>
            <div class="form-group">
                <label for="user_pass">Password</label>
                <input type="password" id="user_pass" name="user_pass" required>
            </div>

            <label style="color:red">
            <?php
                if (isset($_GET['valid']))
                {
                    echo " {$_GET['valid']} <br>";
                }
            ?>
        
            </label> <br>


            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
        <p class="message">Don't have an account? <a href="../Final Project/signup.php">Sign up</a></p>
    </div>

<!-- <?php
    // session_start();

    // include('model\database.php');
    // include('template/header.php');

    // $username = addslashes($_POST['user_name']);
    // $password = addslashes($_POST['user_pass']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    // if (!$username || !$password) {
    //     echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.";
    //     exit;
    // }

    // // mã hóa pasword
    // $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    // $query = "SELECT user_name, user_pass 
    //             FROM user 
    //             WHERE user_name='$username'
    //         ";
    // if (mysql_num_rows($query) == 0) {
    //     echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     exit;
    // }
?> -->

<?php include('template/footer.php') ?>

