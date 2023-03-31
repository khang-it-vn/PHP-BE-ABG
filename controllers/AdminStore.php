<?php
    class AdminStore extends Controller{
        public function Index()
        {
            return $this -> returnViewWithLayout(null, 'admin_store.php');

        }

        public function Add()
        {
            return $this -> returnViewWithLayout(null, 'admin_store.php');
        }
    }
?>