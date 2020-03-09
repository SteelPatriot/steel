<?php

require_once "../core/DataBase.php";

class Core
{

    public function deamonTheme(){
        $pdo = new DataBase();
        $db = $pdo->linc();
        $statment = $db->prepare("SELECT * FROM theme WHERE id = ?");
        $statment->execute(array('1'));
        $array = $statment->fetch(PDO::FETCH_ASSOC);
        print_r($array);
    }



}
