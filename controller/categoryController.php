<?php

include_once('../classes/category.php');

class CategoryController extends Category
{

    public function addCategory($name)
    {
        return $this->addCategoryDB($name);
    }
    public function UpdateCategory($id_category, $name)
    {
        return $this->UpdateCategoryDB($id_category, $name);
    }
    public function deleteCategory($id_category)
    {
        return $this->deleteCategoryDB($id_category);
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
