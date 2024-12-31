<?php
    require ('model\m_topic.php');

    class C_topic
    {
        public function list_all_topic()
        {
            $top = new Category();
            $list_t = $top->list_all_topic();
            
            return $list_t;
        }
    }
?>