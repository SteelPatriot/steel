<?php


class DataBase
{
    private $dataInfo;

    protected function connect(){

        $this->dataInfo = require_once "../config_core.php";
        $dsn = 'mysql:host=localhost;dbname=steel;charset=utf8';
        $pdo = new PDO($dsn, "root", "", array(PDO::ATTR_PERSISTENT => true));
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
}
public function linc (){
        return $this->connect();
}
}
