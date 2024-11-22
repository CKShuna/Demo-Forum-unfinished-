
<?php include('template/head.php') ?>

<?php include('template/header.php') ?>

    <div class="container">
        <h2>Sign Up</h2>
        <form method="POST" action="controller/c_signup.php">
            <div class="form-group">
                <label for="username">Email Address</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="firstname">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
   
    </div>


<?php include('template/footer.php') ?>

