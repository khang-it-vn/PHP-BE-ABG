<?php
    class AdminDoc extends Controller{
        public function Index()
        {
            return $this -> returnViewWithLayout(null,'admin_doc.php');
        }

        public function Add()
        {
            return $this -> returnViewWithLayout(null,'admin_doc.php');
        }
    }
?>