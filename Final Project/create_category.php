<?php include('template/head.php') ?>
<?php include('template/header.php') ?>

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