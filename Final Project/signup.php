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

    img.avatar {
    width: 20%;
    border-radius: 50%;
    display: block;
    margin: 10px auto;
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

    <div class="container">
        <h2>Sign Up</h2>
        <form method="POST" action="control\c_signup.php">
            <div class="form-group">
                <label for="user_email">Email Address</label>
                <input type="text" id="user_email" name="user_email" required>
            </div>
            <div class="form-group">
                <label for="user_pass">Password</label>
                <input type="password" id="user_pass" name="user_pass" required>
            </div>

            <div class="form-group">
                <label for="user_name">Username</label>
                <input type="text" id="user_name" name="user_name" required>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
   
    </div>


<?php include('template/footer.php') ?>

