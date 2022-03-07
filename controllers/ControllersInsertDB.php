<?php
include("../vendor/autoload.php");
use Models\ClassDB;

class ControllersInsertDB
{
    public function insertDB()
    {
    //extract - isset
    extract($_POST);
    if(isset($_POST['dataList']) && isset($_POST['qtd']) && isset($_POST['prod']) && isset($_POST['precoUni'])){
        //variaveis post
        $id=null;
        $dataList=$_POST['dataList'];
        $qtd=$_POST['qtd'];
        $prod=strtoupper($_POST['prod']);
        $precoUni=$_POST['precoUni'];
        //instancia
        $db = new ClassDB();
        $db->insertDB(
            "list",
            "?,?,?,?,?",
            array(
                $id,
                $dataList,
                $qtd,
                $prod,
                $precoUni
            )
        );
        header("Location: ../index.php");
        die();

    }else{
        header("Location: ../index.php");
        die();
    }
        }
}
$obj = new ControllersInsertDB();
$obj->insertDB();
?>
