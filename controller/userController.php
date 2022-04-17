<?php

include_once('../classes/user.php');

class UserController extends User
{

    public function addUser($username, $email,  $picture, $password)
    {
        return $this->addUserDB($username, $email,  $picture, $password);
    }
    public function UpdateUser($id_user, $username, $email, $password)
    {
        return $this->UpdateUserDB($id_user, $username, $email,  $password);
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
