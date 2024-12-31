
<?php include('template/head.php') ?>

<?php include('template/header.php') ?>

<!-- Hero Section -->
<div class="hero">
    <div class="container">
        <h1>Welcome to My Forum</h1>
        <p>This is simply a demo. We'll update in the future!</p>
    </div>
</div>

<!-- Main Content -->
<?php
    require ('control\c_list_category.php');

    $c_cat = new C_category();
    $list = $c_cat->list_all_category();
?>

<div class="container">
    <h1>Category</h1>
        <div class="list-group">
            <?php foreach ($list as $cat): ?>

            <div class="list-group-item">
                <p> <?php echo "{$cat['category_name']}"; ?> <br> </p>
            </div>

            <?php endforeach; ?>
        </div>
    </div>

<?php include('template/footer.php') ?>