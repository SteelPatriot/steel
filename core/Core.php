<?php

class Core
{
    function db ($host, $user, $password, $database){
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($host, $user, $password, $database));
        mysqli_close($link);
    }

}