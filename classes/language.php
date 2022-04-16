<?php

include_once('cnx.php');
class Language extends Connection
{
    protected function getLanguageDB()
    {
        $sql = "SELECT *  FROM language  ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
