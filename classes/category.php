<?php

include_once('cnx.php');
class Category extends Connection
{
    protected function getCategoryDB()
    {
        $sql = "SELECT id_category , name  FROM category  ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
