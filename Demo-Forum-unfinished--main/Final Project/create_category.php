<?php include('template/head.php') ?>
<?php include('template/header.php') ?>

<!DOCTYPE html>
<html>
<head>
<style>
/* Add your custom styles here */
    .container {
    max-width: 500px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
    text-align: center;
    color: #04AA6D;
    font-family: Arial, Helvetica, sans-serif;
    margin-bottom: 20px;
    }

    .form-label {
    font-weight: bold;
    color: #333;
    }

    input[type="text"] {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    }

    button {
    background-color: #04AA6D;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    }

    button:hover {
    opacity: 0.8;
    }
</style>
</head>
<body>

    <div class="container">
        <h2>Create new category</h2>
               
                <form action="/Final Project/control/c_create_category.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" id="category_name" name="category_name" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add category</button>
                </form>
        </div>

<?php include('template/footer.php') ?>