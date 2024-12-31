<?php include('template/head.php') ?>

<?php include('template/header.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Comment on Article</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #d4edda;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #04AA6D;
        }

        label {
            font-weight: bold;
            color: #333333;
            display: block;
            margin-top: 10px;
        }

        textarea {
            width: 100%; /* Set the width of the textarea to half the container width */
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 8px;
            display: block;
            margin-left: auto;
            margin-right: auto; /* Center the textarea horizontally */
        }

        input[type="submit"] {
            background-color: #04AA6D;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 50%; /* Center the submit button and set its width */
            font-size: 16px;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        input[type="text"], select {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reply to a Topic</h1>
        <form action="control/c_create_reply.php" method="POST" enctype="multipart/form-data">
            <label for="reply_content">Comment:</label><br>
            <textarea id="reply_content" name="reply_content" rows="5" cols="50" required></textarea><br><br>
            
            <label for="reply_topic">Reply to Topic ID:</label><br>
            <input type="text" id="reply_topic" name="reply_topic" required><br><br>
            
            <label for="reply_by">User ID (Topic By):</label><br>
            <input type="text" id="reply_by" name="reply_by" required><br><br>

            <input type="hidden" name="post_id" value="<?php //echo $_GET['post_id']; ?>">
            
            <input type="submit" value="Comment">
        </form>
    </div>
</body>
</html>