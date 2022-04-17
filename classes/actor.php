<?php

include_once('cnx.php');
class Actor extends Connection
{
    protected function getActorDB()
    {
        $sql = "SELECT id_actor , first_name, last_name  FROM actor  ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
