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
    }
?>