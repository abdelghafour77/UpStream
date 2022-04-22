<?php

include_once('../classes/mylist.php');

class MylistController extends MyList
{

    public function addToList($id_movie, $id_user)
    {
        return $this->addToListDB($id_movie, $id_user);
    }

    public function deleteFromList($id_movie, $id_user)
    {
        return $this->deleteFromListDB($id_movie, $id_user);
    }
}
