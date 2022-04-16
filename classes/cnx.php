<?php

class Connection
{
    private $serv = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $bd = 'upstream';


    private function pdoConnection()
    {
        $con = new PDO('mysql:host=' . $this->serv . ';dbname=' . $this->bd, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        try {
            return $con;
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    }
    public function connect()
    {
        return $this->pdoConnection();
    }
}
