<?php

namespace SteelCore;

class DataBase
{
    private $db;

    protected function connect(){

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $dsn = "mysql:host=localhost;dbname=steel;charset=utf8";
        try {
            $pdo = new PDO($dsn, "root", "vivi123", $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        return $pdo;
    }

    public function linc (){
        $this->db = $this->connect();
        return $this->db;
    }
}
