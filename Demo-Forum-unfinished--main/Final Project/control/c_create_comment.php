<?php
require_once('../model/m_comment.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment_content = $_POST['comment_content'] ?? '';
    $post_id = $_POST['post_id'] ?? '';
    $comment_by = $_SESSION['loginUSER'];

    if (empty($comment_content) || empty($post_id)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: create_comment.php?post_id=$post_id");
        exit();
    }

    $commentModel = new Comment();
    $result = $commentModel->create_comment($comment_content, $comment_by, $post_id);

    if ($result) {
        $_SESSION['success'] = "Comment posted successfully!";
    } else {
        $_SESSION['error'] = "Failed to post comment.";
    }

    header("Location: ../post_details.php?post_id=$post_id");
}
?>