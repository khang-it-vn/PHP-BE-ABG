
<?php

    class Admin extends Controller{

        public function Add()
        {
           return $this -> returnViewWithLayout(null,'document.php');
        }

        public function List()
        {
           return $this -> returnViewWithLayout(null,'document.php');
        }
    }
?>