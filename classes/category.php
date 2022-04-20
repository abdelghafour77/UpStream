<?php

include_once('cnx.php');
class Category extends Connection
{
    protected function addCategoryDB($name)
    {
        // insert into movie table
        $sql = "INSERT INTO category(name)values(?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]); // or die(print_r($stmt->errorInfo() ));
        // insert into categorie


        $_SESSION['message'] = 'ajouter';
        return 1;
    }
    protected function updateCategoryDB($id_category, $name)
    {

        $sql = "UPDATE category SET name= ?  WHERE id_category = ? ; ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $id_category]);



        $_SESSION['message'] = 'modifier';

        return 1;
    }
    protected function deleteCategoryDB($id_category)
    {

        $sql = "DELETE from category WHERE id_category = ? ; ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_category]);
        $_SESSION['message'] = 'modifier';

        return 1;
    }
    protected function getCategoryDB()
    {
        $sql = "SELECT id_category , name  FROM category  ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getCategoryByIdDB($id_category)
    {
        $sql = "SELECT *  FROM category WHERE id_category =? ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_category]);
        $result = $stmt->fetchAll();
        return $result;
    }
}
