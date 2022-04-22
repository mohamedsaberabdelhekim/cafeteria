<?php
    require_once("../../models/products_model.php");
    require_once("../../models/category_model.php");

    

    class EditProduct{

        function edit (){

            $category= new Category ();
            $allCategories= $category->selectAll();

            $product= new Product ();
            $name='';
            $image='';
            $price='';
            $status='';
            $categoryID='';

            if ( isset($_POST['submit']) ) {
                $id= $_POST['id'];
                $name = isset($_POST['name']) ?  $_POST['name'] :NULL;
                $image = isset($_POST['img']) ?  $_POST['img'] :NULL;
                $price = isset($_POST['price']) ?  $_POST['price'] :NULL;
                $status = isset($_POST['status']) ?  $_POST['status'] :NULL;
                $categoryID = isset($_POST['categoryID']) ?  $_POST['categoryID'] :NULL;
            
            }
        
            $product->updateProduct($id,$name,$image,$price,$status,$categoryID); 
           header("Location: listProduct_controller.php");
            
        }
    


}

$product= new EditProduct();
$product->edit();

require_once('../../tempViews/10_edit-product.php');

?>