<?php

include_once('../classes/category.php');

class CategoryView extends Category
{

	public function getCategory()
	{
		return $this->getCategoryDB();
	}
	public function getCategoryById($id_category)
	{
		return $this->getCategoryByIdDB($id_category);
	}
}
