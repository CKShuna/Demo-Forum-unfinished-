<?php
    require_once('../model/m_reply.php');
    require_once('../model/m_category.php');
    require_once('../model/m_topic.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $content = $_POST['reply_content'] ?? '';
        $by_topic = $_POST['reply_id'] ?? '';
        $by_who = $_POST['reply_by'] ?? '';

        // if (empty($comment_content) || empty($post_id)) {
        //     $_SESSION['error'] = "All fields are required.";
        //     header("Location: create_comment.php?post_id=$post_id");
        //     exit();
        // }

        $commentModel = new Reply();
        $result = $commentModel->create_reply($content, $by_topic, $by_who);

        if ($result) {
            $_SESSION['success'] = "Comment posted successfully!";
        } else {
            $_SESSION['error'] = "Failed to post comment.";
        }

        header("Location: ../index.php");
    }

    require_once('create_comment.php');
?>