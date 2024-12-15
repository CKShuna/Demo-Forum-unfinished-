<?php include('template/head.php') ?>
<?php include('template/header.php') ?>

<div class="container">
    <h2>Create a topic</h2>
    <form action="../control/c_create_topic.php" method="POST" enctype="multipart/form-data">
    <label for="topic_subject">Topic Subject:</label><br>
        <input type="text" id="topic_subject" name="topic_subject" required><br><br>

        <label for="topic_by">User ID (Topic By):</label><br>
        <input type="number" id="topic_by" name="topic_by" required><br><br>

        <label for="topic_cat">Category:</label><br>
        <select id="topic_cat" name="topic_cat" required>
            <option value="">-- Select a Category --</option>

            <?php
            
            foreach ($categories as $category) {
                echo '<option value="' . $category['category_id'] . '">' . $category['category_name'] . '</option>';
            }
            ?>

        </select><br><br>

        <input type="submit" value="Create Topic">
    </form>
</div>