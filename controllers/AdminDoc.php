<?php
    class AdminDoc extends Controller{
        public function Index()
        {
            $this -> returnViewWithLayout(null,'document.php');
        }
    }
?>