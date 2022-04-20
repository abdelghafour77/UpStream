<?php

include_once('../classes/user.php');

class UserView extends User
{

	public function getUser($email)
	{
		return $this->getUserDB($email);
	}
	public function getAllUser()
	{
		return $this->getAllUserDB();
	}
}
