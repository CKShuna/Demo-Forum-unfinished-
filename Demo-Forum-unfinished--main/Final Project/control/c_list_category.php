<?php
    require ('model\m_category.php');

    class C_category 
    {
        public function list_all_category()
        {
            $cat = new Category();
            $list_cat = $cat->list_all_cat();
            
            return $list_cat;
        }

        // public function get_all_cat() {
        //     $cat = new Category();
        //     $list_cat = $cat->get_all_cat();
            
        //     return $list_cat;
        // }
    }
?>