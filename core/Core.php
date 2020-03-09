<?php
namespace Core;

class Core
{
   // private function Core(){
    //    session_start();
  //  }

    protected function deamonTheme(){
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