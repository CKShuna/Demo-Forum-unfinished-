<?php include('template/head.php') ?>
<?php include('template/header.php') ?>

    <div class="container">
        <h2>Sign In</h2>
        <form method="POST" action="control\c_signin.php">
            <div class="form-group">
                <label for="firstname">Username</label>
                <input type="text" id="user_name" name="user_name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
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
        <p class="message">Don't have an account? <a href="C:\xampp\htdocs\Final Project\signup.php">Sign up</a></p>
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

