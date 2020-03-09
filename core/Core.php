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