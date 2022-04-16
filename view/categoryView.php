<?php

include_once('../classes/category.php');

class CategoryView extends Category
{

	public function getCategory()
	{
		return $this->getCategoryDB();
	}
}
