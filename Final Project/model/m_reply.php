<?php
require_once("database.php");

class Reply extends Database {

    public function create_reply($content, $by_topic, $by_who) {
        $sql = "INSERT INTO reply(reply_content, reply_topic, reply_by) VALUES ('{$content}','{$by_topic}','{$by_who}')";
        $this->set_query($sql);
        $result = $this->excute_query();
        $this->close();
        return $result;
    }

    public function list_all_reply($id) {
        $sql = "SELECT * FROM reply WHERE reply_id = '{$id}'";
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