<?php


class DataBase
{
    private $dataInfo;

    protected function connect(){
        $this->dataInfo = require_once "../config_core.php";
        $dsn = "mysql:host=".$this->dataInfo['host'].", dbname=".$this->dataInfo['database'].", charset=utf8 ";
        $pdo = new PDO($dsn, $this->dataInfo['usensne'], $this->dataInfo['password'])  ;
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
}
public function linc (){
        return $this->connect();
}
}