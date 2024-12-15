<?php
    require_once("database.php");

    Class Category extends Database {

        public function list_all_cat() {
            $sql = "SELECT * FROM category";
            $this->set_query($sql);

            //echo "$this->query <br>";

            $result = $this->excute_query();
            $list_cat = array();

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $list_cat[] = $row ;
                }
            } 

            return $list_cat;
        }

        public function create_category($cat_name) {
            if (empty(trim($cat_name))) {
                return "Tên category không được để trống!";
            }
            else {
                $sql = "INSERT INTO Category (category_name) VALUES ('{$cat_name}')";

                $this->set_query($sql);
                $this->excute_query();
                $this->close();
            }
        }

        public function get_all_categories()
        {
            $sql = "SELECT category_id, category_name FROM Category";
            $this->set_query($sql);

            //echo "$this->query <br>";

            $result = $this->excute_query();
            $categories = array();

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $categories[] = $row ;
                }
            }

            return $categories;
        }
    }
?>