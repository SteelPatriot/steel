<?php


require_once "../core/DataBase.php";


echo $_POST['coment'];

$pdo = new DataBase();

$db = $pdo->linc();



if(isset($_POST["site_url"])){
    if(!empty($_POST["theme_name"])&!empty($_POST["theme_url"])&!empty($_POST["coment"])) {


        $sql = "INSERT INTO theme (theme_name, theme_url, theme_coment) VALUES (:theme_name, :theme_url, :theme_coment)";
        $statment = $db->prepare($sql);
        //$a1 = "steel";$a2 = "theme/steel/";$a3 = "steel";
        $statment -> bindParam(":theme_name", $_POST["theme_name"]);
        $statment -> bindParam(":theme_url", $_POST["theme_url"]);
        $statment -> bindParam( ":theme_coment", $_POST["coment"]);
        $statment -> execute();
    }

}

echo '
<br>
<form action="" method="post" >
   <input type="text" name="theme_name">
   <input type="text" name="theme_url">
   <input type="text" name="coment">
<input type="submit" value="Выполнить запрос" name="theme" >
</form>' ;

