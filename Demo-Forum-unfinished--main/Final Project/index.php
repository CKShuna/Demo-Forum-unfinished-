
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
    <h1 style="text-align: center; color: #04AA6D; font-family: Arial, Helvetica, sans-serif;">Category</h1>
    <div class="list-group">
        <?php foreach ($list as $cat): ?>
            <a href="list_topic.php?category_id=<?php echo urlencode($cat['category_id']); ?>" class="list-group-item" style="border: 1px solid #ddd; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #f9f9f9; text-decoration: none;">
            <p style="font-size: 18px; font-weight: bold; color: #333; margin: 0;">
                <?php echo htmlspecialchars($cat['category_name'], ENT_QUOTES, 'UTF-8'); ?>
            </p>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?php include('template/footer.php') ?>