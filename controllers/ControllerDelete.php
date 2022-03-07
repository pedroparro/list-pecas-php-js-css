<?php
 require("../vendor/autoload.php");
 use \Models\ClassDB;

  class ControllerDelete
  {
      public function deleteDB()
      {
          if(isset($_GET['id'])){
            $id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_SPECIAL_CHARS);
            $obj = new ClassDB();
            $obj->deleteDB(
                "list",
                "id=?",
                array(
                    $id
                )
            );
            header("Location: http://127.0.0.1/list/views/visualizar.php");
            die();
          }else{
            header("Location: http://127.0.0.1/list/views/visualizar.php");
            die();
          }
      }
  }

$obj = new ControllerDelete();
$obj->deleteDB();
?>