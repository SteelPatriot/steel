<?php

if(isset($_POST["theme"])){
    if(!empty($_POST["site_name"])&!empty($_POST["site_url"])&!empty($_POST["coment"])) {

        echo $_POST["site_name"];
        echo $_POST["site_url"];
        echo $_POST["coment"];
    }

}