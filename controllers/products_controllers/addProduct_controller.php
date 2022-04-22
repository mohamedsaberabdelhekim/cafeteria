<?php
    require_once("../../models/products_model.php");
    require_once("../../models/category_model.php");

    $category= new Category ();
    $allCategories= $category->selectAll();

    $product=new Product();

            
            $name='';
            $image='';
            $price='';
            $status='';
            $categoryID='';

            if ( isset($_POST['submit']) ) {
                
                $name = isset($_POST['name']) ?  $_POST['name'] :NULL;
                $image = isset($_POST['img']) ?  $_POST['img'] :NULL;
                $price = isset($_POST['price']) ?  $_POST['price'] :NULL;
                $status = isset($_POST['status']) ?  $_POST['status'] :NULL;
                $categoryID = isset($_POST['categoryID']) ?  $_POST['categoryID'] :NULL;
                
                
                $product->insert($name,$image,$price,$status,$categoryID); 
                
                 header("Location: listProduct_controller.php");

            }
            
        


   
    
    include ('../../tempViews/08_add-product.php');


?>