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
        
    }
?>