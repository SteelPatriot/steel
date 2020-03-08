<?php

class Core
{
    function db (){
        require_once "../config_core.php";
        $link = mysqli_connect()
        or die("Ошибка " . mysqli_error($host, $user, $password, $database));
        mysqli_close($link);
    }

}