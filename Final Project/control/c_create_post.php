<?php
require_once('../model/m_post.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_title = $_POST['post_title'] ?? '';
    $post_content = $_POST['post_content'] ?? '';
    $post_category = $_POST['post_category'] ?? '';
    $post_by = $_SESSION['loginUSER'];

    if (empty($post_title) || empty($post_content) || empty($post_category)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: create_post.php");
        exit();
    }

    $postModel = new Post();
    $result = $postModel->create_post($post_title, $post_content, $post_by, $post_category);

    if ($result) {
        $_SESSION['success'] = "Post created successfully!";
    } else {
        $_SESSION['error'] = "Failed to create post.";
    }

    header("Location: ../index.php");
}
?>