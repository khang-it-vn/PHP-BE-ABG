<?php
    class StoreModel extends DbContext{
        public function getCategory()
        {
            $sql = "SELecT * FROM category";
            $this -> query($sql);
            return $this -> resultSet();
        }
    }
?>