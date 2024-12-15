<?php
    require_once('../model/m_category.php');

    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['category_name'] ?? '';

        $category = new Category();
        $result = $category->create_category($name);

        header("Location: ../index.php");
        
    }
?>