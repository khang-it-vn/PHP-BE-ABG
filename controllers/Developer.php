<?php
    class Developer extends Controller{
        public function Index()
        {
            $documentModel = new DocumentModel();
            $data = array("docs" =>  $documentModel -> getDocuments(),
                            "content" => $documentModel -> getContentForId());

                            
            return $this -> returnViewWithLayout($data,'document.php');
        }
    }
?>