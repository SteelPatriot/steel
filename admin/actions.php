<?php
//require_once "../core/Core.php";
require_once "../config_core.php";
require_once "../core/DataBase.php";

//$core = new Core();
$db = new DataBase();
$lincDB = $db->linc();
if(isset($_POST["theme"])){
    if(!empty($_POST["theme_name"])&!empty($_POST["theme_url"])&!empty($_POST["coment"])) {

        //$linc = $core->db($host, $user, $password, $database);
       // prepare()
        $theme_name = $_POST["theme_name"];
        $theme_url = $_POST["theme_url"];
        $coment = $_POST["coment"];


        $linc = $lincDB->prepare("INSERT INTO theme (theme_name, theme_url, theme_coment) VALUES (?, ?, ?)");
        $linc->bind_param('sss', $theme_name, $theme_url, $coment);
        $linc->execute();
        $linc->commit();

        //INSERT INTO `theme`(`id`, `theme_name`, `theme_url`, `theme_coment`) VALUES ([value-1],[value-2],[value-3],[value-4])
    }

}