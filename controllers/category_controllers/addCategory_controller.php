<?php

require_once("../../models/category_model.php");

class AddCategory{

    function add($postArray){
        $category= new Category();
        $name="";

        if(isset($postArray['submit'])){
            $name= isset($postArray['name'])? $postArray['name'] : Null;
            

        }

        $category->insert($name);

    }
}

$category= new AddCategory();
$category->add($_POST);

include ("../../views/helperViews/addCategory.php");

?>