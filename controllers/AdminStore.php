<?php
    class AdminStore extends Controller{
        public function Index()
        {
            SessionUtil::checkRoleAccessStore(ADMIN_STORE);
            $adminStoreModel = new AdminStoreModel;
            
            
            $array = array('ListProduct'=>$adminStoreModel -> GetData());
            return $this -> returnViewWithLayout($array, 'admin_store.php');

        }

        public function Add()
        {
            SessionUtil::checkRoleAccessStore(ADMIN_STORE);
            $adminStoreModel = new AdminStoreModel;
            $adminStoreModel -> Add();

           return $this -> returnViewWithLayout($adminStoreModel->GetdataCategory(), 'admin_store.php');
        }

        public function Delete ()
        {
            SessionUtil::checkRoleAccessStore(ADMIN_STORE);
            $adminStoreModel = new AdminStoreModel;
            $adminStoreModel -> Delete();
            header('Location: ' .ROOT_URL.'adminStore/Index');
        }
    }
?>