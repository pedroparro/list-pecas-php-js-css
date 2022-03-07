<?php
namespace Models;

class ClassDB extends ClassConexao
{
    public $bd;
    private $cont;

    //prepare sql
    private function prepareSql($sql,$param)
    {
        $this->countParam($param);
        $this->bd = $this->conectaDB("127.0.0.1", "home", "root", "")->prepare($sql);

        //if count
        if($this->cont > 0){
            for($i=1; $i <= $this->cont; $i++){
                $this->bd->bindValue($i,$param[$i-1]);
            }
        }
        $this->bd->execute();
    }

    //cont parametros
    private function countParam($param)
    {
        $this->cont = count($param);
    }

    //insertDB
    public function insertDB($table,$where,$param)
    {
        $this->prepareSql("INSERT INTO {$table} VALUES ({$where})",$param);
        return $this->bd;
    }

    //selectDB
    public function selectDB($fields,$table,$where,$param)
    {
        $this->prepareSql("SELECT {$fields} FROM {$table} {$where}",$param);
        return $this->bd;
    }

    //deleteDB
    public function deleteDB($table,$where,$param)
    {
        $this->prepareSql("DELETE FROM {$table} WHERE {$where}",$param);
        return $this->bd;
    }

    //updateDB
    public function updateDB($table,$set,$where,$param)
    {
        $this->prepareSql("UPDATE {$table} SET {$set} WHERE {$where}",$param);
        return $this->bd;
    }

}
?>