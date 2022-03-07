<?php
 require("../vendor/autoload.php");
 use \Models\ClassDB;

 class ControllerUpdate
 {
     public function updateDB()
     {
        //isset - extract
        extract($_POST);
        if(isset($_POST['id']) && isset($_POST['dataList']) && isset($_POST['qtd']) && isset($_POST['prod']) && isset($_POST['precoUni'])){
        //instancia
        $obj = new ClassDB();
        $obj->updateDB(
                "list",
                "dataList=?,qtd=?,prod=?,precoUni=?",
                "id=?",
                array(
                    $_POST['dataList'],
                    $_POST['qtd'],
                    strtoupper($_POST['prod']),
                    $_POST['precoUni'],
                    $_POST['id']
                ));
               
        }else{
            header("Location: http://127.0.0.1/list/views/visualizar.php");
            die();
        }
     }
 }
 $obj = new ControllerUpdate();
 $obj->updateDB();
?>