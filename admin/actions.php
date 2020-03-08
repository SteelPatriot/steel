<?php
require_once "../core/Core.php";
require_once "../config_core.php";
$insert_theme = "INSERT INTO `theme`(`theme_name`, `theme_url`, `theme_coment`) VALUES (?, ?, ?)";
$core = new Core();
$linc = $core->db($host, $user, $password, $database);


if(isset($_POST["theme"])){
    if(!empty($_POST["theme_name"])&!empty($_POST["theme_url"])&!empty($_POST["coment"])) {

        $theme_name = $_POST["theme_name"];
        $theme_url = $_POST["theme_url"];
        $coment = $_POST["coment"];


        $stmt = $linc->prepare($insert_theme);
        $stmt->bind_param('sss', $theme_name, $theme_url, $coment);

        $stmt->execute();

        printf("%d Row inserted.\n", $stmt->affected_rows);

        $stmt->close();
    }

}