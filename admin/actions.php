<?php


require_once "../core/DataBase.php";




$pdo = new DataBase();

$db = $pdo->linc();



if(isset($_POST["theme_url"])){
    if(!empty($_POST["theme_name"])&!empty($_POST["theme_url"])&!empty($_POST["coment"])) {


        $sql = "INSERT INTO theme (theme_name, theme_url, theme_coment) VALUES (?,?,?)";
        $statment = $db->prepare($sql);

        $statment -> bindParam(1,$_POST["theme_name"]);
        $statment -> bindParam(2,$_POST["theme_url"]);
        $statment -> bindParam(3, $_POST["coment"]);
        $statment -> execute();
        echo $_POST['theme_name'];
        echo $_POST['theme_url'];
        echo $_POST['coment'];
    }

}


