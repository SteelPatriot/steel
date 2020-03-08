<?php
require_once "../core/Core.php";
require_once "../config_core.php";
$insert_theme = "INSERT INTO `theme`(`theme_name`, `theme_url`, `theme_coment`) VALUES (?, ?, ?)";
$core = new Core();
$linc = $core->db($host, $user, $password, $database);


if(isset($_POST["theme"])){
    if(!empty($_POST["site_name"])&!empty($_POST["site_url"])&!empty($_POST["coment"])) {

        $site_name = $_POST["site_name"];
        $site_url = $_POST["site_url"];
        $coment = $_POST["coment"];


        $stmt = $linc->prepare($insert_theme);
        $stmt->bind_param('sss', $site_name, $site_url, $coment);

        $stmt->execute();

        printf("%d Row inserted.\n", $stmt->affected_rows);

        $stmt->close();
    }

}