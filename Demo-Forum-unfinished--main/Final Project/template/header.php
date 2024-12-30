
<?php session_start() ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand d-flex align-items-center" href="index.php">My Forum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_category.php">Create Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_topic.php">Create Topic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_comment.php">Create Comment</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="create_topic.php">Create Topic</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="model/init.php">Init</a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link" href="admin/list_user.php">Admin</a>
                </li>  -->

                

                <?php  if ( isset( $_SESSION["loginUSER"] ) ) { ?>

                    <li class="nav-item">
                        <a class="nav-link" > <?php echo $_SESSION["loginUSER"] ?>  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="control/c_signout.php" > Sign Out</a>
                    </li>

                <?php } else { ?>
                
                    <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Sign In</a>
                    </li>


                <?php }  ?>

            </ul>
        </div>
    </nav>

<style>
    header {
        background-color: #2a9d8f; /* Darker green */
    }
    .navbar-dark.bg-gradient {
        background: linear-gradient(to right, #ff6a00, #d83d3d);
    }
    
    .navbar-nav .nav-link {
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
    }

    .navbar-brand img {
        border-radius: 50%;
        transition: transform 0.3s ease;
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
    }

    .navbar-toggler-icon {
        background-color: #fff;
    }
</style>