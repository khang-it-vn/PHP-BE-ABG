<?php
    class Developer extends Controller{
        public function Index()
        {
            $this -> returnViewWithLayout(null,'document.php');
        }
    }
?>