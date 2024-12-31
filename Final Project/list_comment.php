
<?php include('template/head.php') ?>

<?php include('template/header.php') ?>

<!-- Main Content -->
<?php
    require ('model\m_topic.php');

    $category_id = intval($_GET['category_id']);
    $topic = new Topic();
    $list = $topic->list_all_topic($category_id);
?>

<div class="container">
    <h1 style="text-align: center; color: #04AA6D; font-family: Arial, Helvetica, sans-serif;">
        Topics for Category: <?php echo htmlspecialchars($category_id ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
    </h1>
    <div class="list-group">
        <?php if (!empty($list)): ?>
            <?php foreach ($list as $top): ?>
            <div class="list-group-item" style="border: 1px solid #ddd; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #f9f9f9;">
                <p style="font-size: 18px; font-weight: bold; color: #333; margin: 0;">
                    <?php echo htmlspecialchars($top['topic_subject'], ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="text-align: center; color: gray;">No topics available for this category.</p>
        <?php endif; ?>
    </div>
</div>


<?php include('template/footer.php') ?>