<?php

class Core
{
    function db ($host, $user, $password, $database)
    {
        $link = new mysqli($host, $user, $password, $database);
        ///or die("Ошибка " . mysqli_error($host, $user, $password, $database));
        $link->set_charset("utf8");
        return $link;
    }

}