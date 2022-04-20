<?php

include_once('../classes/actor.php');

class ActorController extends Actor
{

    public function addActor($first_name, $last_name)
    {
        return $this->addActorDB($first_name, $last_name);
    }
    public function UpdateActor($id_actor, $first_name, $last_name)
    {
        return $this->UpdateActorDB($id_actor, $first_name, $last_name);
    }
    public function deleteActor($id_actor)
    {
        return $this->deleteActorDB($id_actor);
    }
    // public function addUser2($nom, $prenom, $email, $password)
    // {
    //     return $this->addUserDB2($nom, $prenom, $email, $password);
    // }
    // public function UpdateUser2($id, $nom, $prenom, $email)
    // {
    //     return $this->UpdateUserDB2($id, $nom, $prenom, $email);
    // }
}
