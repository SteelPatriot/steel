<?php


class DataBase
{
    private $dataInfo;

    protected function connect(){

        $this->dataInfo = require_once "../config_core.php";
        $dsn = "mysql:host=localhost; dbname=steel";
        $pdo = new PDO($dsn, "steel", "vivi123");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
}
public function linc (){
        return $this->connect();
}
}
