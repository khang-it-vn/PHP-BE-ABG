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
            $paramUtil = new ParamUtil();
            $params = $paramUtil -> GetParamFromUri();
            
            $sql = '';
            if(isset($params['id']))
            {
                $sql = "select * from product join category WHERE product.id = category.id and category.id = :id;";
                $this->query($sql);
                $this -> bind(":id", $params['id']);
            }
            else
            {
                $sql = "SELECT * FROM product";
                $this->query($sql);
            }

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

        public function getProductById()
        {
            $id =  $_POST['id'];
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

        public function getProductByKeyWord()
        {
            if(isset($_POST['submit']))
            {
                $keyword = $_POST['keyword'];

                $sql = "SELECT * FROM product WHERE name like :keyword;"; // sql injection '%' + keyword + '%' 
                $this ->query($sql);
                $this ->bind(":keyword",( '%' . $keyword . '%'));
                return $this ->resultSet();
            }
            
        }

        public function getProductByIdGet()
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