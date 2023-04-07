<?php
    class AdminDoc extends Controller{
        public function Index()
        {
            $adminModel = new AdminDocModel();
            $array = array("docs" => $adminModel -> GetData(), "pages" => $adminModel -> count()); 
        
            return $this -> returnViewWithLayout($array,'admin_doc.php');
             
        }

        public function Add()
        {
            $adminModel = new AdminDocModel();
            $adminModel -> Add();
            return $this -> returnViewWithLayout(null,'admin_doc.php');
        }
    }
?>