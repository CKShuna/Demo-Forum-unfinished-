
<?php include('template/head.php') ?>

<?php include('template/header.php') ?>

    <div class="container">
        <h2>Sign Up</h2>
        <form method="POST" action="control\c_signup.php">
            <div class="form-group">
                <label for="username">Email Address</label>
                <input type="text" id="user_email" name="user_email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="user_pass" name="user_pass" required>
            </div>

            <div class="form-group">
                <label for="firstname">Username</label>
                <input type="text" id="user_name" name="user_name" required>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
   
    </div>


<?php include('template/footer.php') ?>

