<?php include('template/head.php') ?>

<?php include('template/header.php') ?>

<?php
//if (!isset($_SESSION['loginUSER'])) {
//    header("Location: signin.php");
//    exit();
//}
//?>

<!DOCTYPE html>
<html>
<head>
    <title>Post a New Article</title>
</head>
<body>
    <h1>Post a New Article</h1>
    <form action="c_create_post.php" method="POST">
        <label for="post_title">Title:</label>
        <input type="text" id="post_title" name="post_title" required><br><br>
        
        <label for="post_content">Content:</label><br>
        <textarea id="post_content" name="post_content" rows="10" cols="50" required></textarea><br><br>
        
        <label for="post_category">Category:</label>
        <select id="post_category" name="post_category" required>
        <option value="">-- Select a Category --</option>
            <?php
            require('Final Project\model\m_category.php');

            $categories = new Catergory();
            $list = $categories->get_all_categories();

            foreach ($categories as $category) {
                echo '<option value="' . $category['category_id'] . '">' . $category['category_name'] . '</option>';
            }
            ?>
        </select><br><br>
        
        <input type="submit" value="Post">
    </form>
</body>
</html>