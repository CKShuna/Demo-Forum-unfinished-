<?php include('template/head.php') ?>
<?php include('template/header.php') ?>

<!DOCTYPE html>
<html>
<head>
<style>
/* Styling for the form container */
    .container {
    max-width: 600px;
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

    label {
    font-weight: bold;
    color: #333;
    margin-top: 10px;
    display: block;
    }

    input[type="text"], select {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    }

    input[type="number"], select {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    }

    input[type="submit"] {
    background-color: #04AA6D;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    }

    input[type="submit"]:hover {
    opacity: 0.8;
    }

    select option {
    padding: 5px;
    }

</style>
</head>
<body>

<div class="container">
    <h2>Create a topic</h2>
    <form action="control/c_create_topic.php" method="POST" enctype="multipart/form-data">
    <label for="topic_subject">Topic Name:</label><br>
        <input type="text" id="topic_subject" name="topic_subject" required><br><br>

        <label for="topic_by">User ID (Topic By):</label><br>
        <input type="number" id="topic_by" name="topic_by" required><br><br>

        <label for="topic_cat">Category:</label><br>
        <input type="text" id="topic_cat" name="topic_cat" required><br><br>
        <!-- <label for="topic_cat">Category:</label><br>
        <select id="topic_cat" name="topic_cat" required>
            <option value="">-- Select a Category --</option> -->

            <?php
            // require('Final Project\model\m_category.php');

            // $categories = new Catergory();
            // $list = $categories->get_all_categories();
            
            // foreach ($categories as $category) {
            //     echo '<option value="' . $category['category_id'] . '">' . $category['category_name'] . '</option>';
            // }

            // exit;

            //Nếu phần lệnh này tồn tại -> nút Submit biến mất
            //Phần lệnh không tồn tại -> có nút Submit
            ?>

        <!-- </select><br><br> -->

        <input type="submit" value="Create Topic">
    </form>
</div>