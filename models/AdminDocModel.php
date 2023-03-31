<?php

    class AdminDocModel extends DbContext{

        public function Add()
        {
            if(isset($_POST['submit']))
            {
                print_r($_POST);
                $title = $_POST["title"];
                $description = $_POST["content"];

                $sql = "INSERT INTO doc(title, description) VALUES (:title,:description)";
                $this ->query( $sql);
                $this->bind(":title",$title);
                $this ->bind(":description", $description);

                $tatusCode = $this->execute();

                if($statusCode = '00000')
                {
                    header("Location: ".ROOT_URL .'admindoc/index');
                }
                echo `<p>`.$statusCode.`</p>`;
          
            }
        }

        public function GetData()
        {
            $paramUtil = new ParamUtil();
            $params = $paramUtil -> GetParamFromUri();

            $page = 0;
            if(isset($params['page']))
            {
                $page = $params['page'];
            }
            $offset = $page * 10;
            
            $sql = "SELECT * FROM doc LIMIT 10 OFFSET :offset";
            $this -> query($sql);
            $this -> bind(":offset", $offset);
        }
    }
?>