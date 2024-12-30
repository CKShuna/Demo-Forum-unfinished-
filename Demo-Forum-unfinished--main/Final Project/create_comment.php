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
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        label {
            font-weight: bold;
            color: #333333;
            display: block;
            margin-top: 10px;
        }

        textarea {
            width: 50%; /* Set the width of the textarea to half the container width */
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

        input[type="submit"]:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h1>Comment on Article</h1>
    <form action="c_create_comment.php" method="POST">
        <label for="comment_content">Comment:</label><br>
        <textarea id="comment_content" name="comment_content" rows="5" cols="50" required></textarea><br><br>
        
        <input type="hidden" name="post_id" value="<?php //echo $_GET['post_id']; ?>">
        
        <input type="submit" value="Comment">
    </form>
</body>
</html>