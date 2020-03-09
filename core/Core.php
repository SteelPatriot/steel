<?php
namespace SteelCore;
require_once "../core/DataBase.php";
class Core
{
   // private function Core(){
    //    session_start();
  //  }

    public function deamonTheme(){
        $pdo = new DataBase();
        $db = $pdo->linc();

        //$sql = "INSERT INTO theme (theme_name, theme_url, theme_coment) VALUES (?,?,?)";
       // $statment = $db->prepare($sql);


        $statment = $db->prepare("SELECT * FROM theme WHERE id = ?");
        $statment->execute(array('1'));
        $array = $statment->fetch(PDO::FETCH_ASSOC);
        print_r($array);
    }



}

class DataBase
{
    private $db;

    protected function connect(){

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $dsn = "mysql:host=localhost;dbname=steel;charset=utf8";
        try {
            $pdo = new PDO($dsn, "root", "vivi123", $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        return $pdo;
    }

    public function linc (){
        $this->db = $this->connect();
        return $this->db;
    }
}