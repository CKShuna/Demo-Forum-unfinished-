<?php
require_once("database.php");

class Comment extends Database {

    public function create_comment($content, $by, $post_id) {
        $sql = "INSERT INTO Comment (comment_content, comment_by, comment_post) VALUES ('{$content}', '{$by}', '{$post_id}')";
        $this->set_query($sql);
        $result = $this->excute_query();
        $this->close();
        return $result;
    }

    public function list_comments_by_post($post_id) {
        $sql = "SELECT * FROM Comment WHERE comment_post = '{$post_id}'";
        $this->set_query($sql);
        $result = $this->excute_query();
        $list_comments = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $list_comments[] = $row;
            }
        }

        return $list_comments;
    }
}
?>