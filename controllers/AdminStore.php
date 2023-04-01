<?php
    class AdminStore extends Controller{
        public function Index()
        {
            $adminStoreModel = new AdminStoreModel;
            
            
            $array = array('ListProduct'=>$adminStoreModel -> GetData());
            return $this -> returnViewWithLayout($array, 'admin_store.php');

        }

        public function Add()
        {
            $adminStoreModel = new AdminStoreModel;
            $adminStoreModel -> Add();

           return $this -> returnViewWithLayout($adminStoreModel->GetdataCategory(), 'admin_store.php');
        }

        public function Delete ()
        {
            $adminStoreModel = new AdminStoreModel;
            $adminStoreModel -> Delete();
            header('Location: ' .ROOT_URL.'adminStore/Index');
        }
    }
?>