<?php
require_once("database.php");

class Post extends Database {

    public function create_post($title, $content, $by, $category) {
        $sql = "INSERT INTO Post (post_title, post_content, post_by, post_category) VALUES ('{$title}', '{$content}', '{$by}', '{$category}')";
        $this->set_query($sql);
        $result = $this->excute_query();
        $this->close();
        return $result;
    }

    public function list_all_posts() {
        $sql = "SELECT * FROM Post";
        $this->set_query($sql);
        $result = $this->excute_query();
        $list_posts = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $list_posts[] = $row;
            }
        }

        return $list_posts;
    }
}
?>