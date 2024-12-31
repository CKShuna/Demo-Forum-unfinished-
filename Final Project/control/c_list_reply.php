<?php
    require ('model\m_reply.php');

    class C_reply
    {
        public function list_all_reply()
        {
            $rep = new Reply();
            $list = $rep->list_all_reply();
            
            return $list;
        }
    }
?>