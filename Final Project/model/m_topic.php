<?php
    require_once("database.php");

    Class Topic extends Database {

        public function create_topic($topic_name, $topic_by, $topic_cat) {
            if (empty($topic_name) || empty($topic_by) || empty($topic_cat)) {
                return "Các trường thông tin không được để trống!";
            }
            else {
                $sql = "INSERT INTO Topic (topic_subject, topic_by, topic_cat) VALUES ('{$topic_name}', '{$topic_by}', '{$topic_cat}')";

                $this->set_query($sql);
                $this->excute_query();
                $this->close();
            }
        }

        public function list_all_topic() {
            $sql = "SELECT * FROM topic";

            $this->set_query($sql);
            $result = $this->excute_query();
            $list_topic = array();

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $list_cat[] = $row ;
                }
            } 
            
            return $list_cat;
        }
    }
?>