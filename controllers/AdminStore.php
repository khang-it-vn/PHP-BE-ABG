<?php
    class AdminStore extends Controller{
        public function Index()
        {
            return $this -> returnViewWithLayout(null, 'admin_store.php');

        }

        public function Add()
        {
            $adminStoreModel = new AdminStoreModel;
            $adminStoreModel -> Add();

           return $this -> returnViewWithLayout($adminStoreModel->GetdataCategory(), 'admin_store.php');
        }

        
    }
?>