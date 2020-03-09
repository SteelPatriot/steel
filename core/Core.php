<?php

require_once "../core/DataBase.php";

class Core
{

    public function deamonTheme($theme){
        $pdo = new DataBase();
        $db = $pdo->linc();
        $statment = $db->prepare("SELECT * FROM theme WHERE theme_name = ? LIMIT 1");
        $statment->execute(array($theme));
        $array = $statment->fetch(PDO::FETCH_ASSOC);
        print_r($array['theme_url']);
    }



}
