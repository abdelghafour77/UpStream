<?php

include_once('cnx.php');
class Quality extends Connection
{
    protected function getQualityDB()
    {
        $sql = "SELECT *  FROM quality  ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
