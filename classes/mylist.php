<?php

require_once('cnx.php');

class MyList extends Connection
{
    protected function addToListDB($id_movie, $id_user)
    {
        $sql = "SELECT id_movie,id_user FROM my_list WHERE id_movie = ? and id_user= ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_movie, $id_user]);
        $result = $stmt->fetch();
        if (isset($result["id_movie"])) {
            $_SESSION['message'] = "  deja ajouter  ";
            return 2;
        }
        $sql = "INSERT INTO my_list (id_movie,id_user)values(?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_movie, $id_user]);
        $_SESSION['message'] = 'ajouter';

        return 1;
    }
    protected function deleteFromListDB($id_movie, $id_user)
    {

        $sql = "DELETE from my_list WHERE id_movie = ? and id_user = ? ; ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_movie, $id_user]);
        $_SESSION['message'] = 'supprimer';

        return 1;
    }
    protected function getAllListDB($id_user)
    {
        $sql = "SELECT 
        mo.id_movie as id_movie ,
        mo.title as title,
        mo.id_user as id_user,
        mo.date as date,
		mo.language as language,
		mo.duration as duration,
		mo.cover as cover,
		mo.director as director 
        FROM
        movie mo , my_list my
        WHERE
        mo.id_movie=my.id_movie
        and
        my.id_user = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_user]);
        $result = $stmt->fetchAll();

        return $result;
    }
    protected function getListDB($id_user)
    {
        $sql = "SELECT 
        id_movie as id_movie ,
        id_user as id_user
        FROM
        my_list my
        WHERE
        id_user = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_user]);
        $result = $stmt->fetchAll();

        return $result;
    }
}
