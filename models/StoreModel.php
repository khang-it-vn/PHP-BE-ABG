<?php
    class StoreModel extends DbContext{
        public function getCategory()
        {
            $sql = "SELecT * FROM category";
            $this -> query($sql);
            return $this -> resultSet();
        }

        public function getProduct()
        {
            $sql = "SELECT * FROM product";
            $this ->query($sql);
            return $this->resultSet();
        }

        public function getDetailProduct()
        {
            $para = new ParamUtil();
            $array =  $para->GetParamFromUri(); 
            $id =  $array['id'];
            $sql = "SELECT * FROM product WHERE id_product = :id";
            $this->query($sql);
            $this->bind(':id', $id);
            return $this-> single();
        }

        public function getOrder()
        {
            if(isset($_POST['submit']))
            {
                $id = $_POST["id_product"];
                $total = $_POST["total"];
                $sql = "SELECT * FROM product WHERE id_product = :id";
                $this->query($sql);
                $this->bind(':id', $id);
                $product = $this-> single();
               $session = new SessionUtil();
            $session->AddOrder($product, $total);
          
            }
        }
        
    }
?>