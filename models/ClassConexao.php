<?php
namespace Models;

class ClassConexao
{
    private $server = "127.0.0.1";
    private $db = "home";
    private $user = "root";
    private $pass = "";
    private $pdo;

    public function conectaDB()
    {
        try {
            $pdo = new \PDO("mysql:host=$this->server;dbname=$this->db", $this->user, $this->pass);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            //echo "Conectado com sucesso";
        } catch (\PDOException $th) {
            echo "Erro de conexão";
            return $th->getMessage();
        }
        return $pdo;
    }

}
$pdo = new ClassConexao();
$pdo->conectaDB("127.0.0.1", "home", "root", "");
?>