<?php
    require_once('../model/m_topic.php');
    require_once('../model/m_category.php');

    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $topic_subject = $_POST['topic_subject'] ?? '';
        $topic_by = $_POST['topic_by'] ?? '';
        $topic_cat = $_POST['topic_cat'] ?? '';

        if (empty($topic_subject) || empty($topic_by) || empty($topic_cat)) {
            $_SESSION['error'] = "All fields are required.";
            header("Location: create_category.php");
            exit();
        }

        $topicModel = new Topic();
        $result = $topicModel->create_topic($topic_subject, $topic_by, $topic_cat);

        if ($result) {
            $_SESSION['success'] = "Topic created successfully!";
        } else {
            $_SESSION['error'] = "Failed to create topic.";
        }

        header("Location: ../index.php");
    }

    require_once('create_topic.php');
?>