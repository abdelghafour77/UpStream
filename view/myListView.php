<?php

include_once('../classes/mylist.php');

class MyListView extends MyList
{

	public function getAllList($id_user)
	{
		return $this->getAllListDB($id_user);
	}
	public function getList($id_user)
	{
		return $this->getListDB($id_user);
	}
}
