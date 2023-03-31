<?php

    class DocumentModel extends DbContext{

        public function getDocuments()
        {
            $paramUtil = new ParamUtil();
            $params = $paramUtil -> GetParamFromUri();
            $sql = null;
            if(isset($params['title']))
            {
                $sql = "SELECT * FROM doc WHERE title like :title";
                $this -> query($sql);
                $this -> bind(":title",'%'.$params["title"].'%');
            }
            else
            {
                $sql = "SELECT * FROM doc";
                $this -> query($sql);
            }
            
            return $this -> resultSet();
        }

        public function getContentForId()
        {
            $paramUtil = new ParamUtil();
            $params = $paramUtil -> GetParamFromUri();
            $sql = null;
            if(isset($params['id']))
            {
                $sql = "SELECT * FROM doc WHERE id_doc = :id";
                $this ->query($sql);
                $this ->bind(":id",$params['id']);
            }
            else
            {
                $sql = "SELECT * FROM doc WHERE 1";
                $this ->query($sql);
            }

            return $this ->single();
        }
    }
?>