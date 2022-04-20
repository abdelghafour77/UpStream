<?php

include_once('cnx.php');
class Actor extends Connection
{
    protected function addActorDB($first_name, $last_name)
    {
        // insert into movie table
        $sql = "INSERT INTO actor(first_name , last_name)values(?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$first_name, $last_name]); // or die(print_r($stmt->errorInfo() ));
        // insert into categorie


        $_SESSION['message'] = 'ajouter';
        return 1;
    }
    protected function updateActorDB($id_actor, $first_name, $last_name)
    {

        $sql = "UPDATE actor SET first_name= ? , last_name= ? WHERE id_actor = ? ; ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$first_name, $last_name, $id_actor]);



        $_SESSION['message'] = 'modifier';

        return 1;
    }
    protected function deleteActorDB($id_actor)
    {

        $sql = "DELETE from actor WHERE id_actor = ? ; ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_actor]);
        $_SESSION['message'] = 'modifier';

        return 1;
    }
    protected function getActorDB()
    {
        $sql = "SELECT id_actor , first_name, last_name  FROM actor  ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getActorByIdDB($id_actor)
    {
        $sql = "SELECT *  FROM actor WHERE id_actor =? ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_actor]);
        $result = $stmt->fetchAll();
        return $result;
    }
}
