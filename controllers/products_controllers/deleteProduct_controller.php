<?php 
    require_once("../../models/products_model.php");
    $product= new Product ();

    $id=$_GET['id'];
    $product->delete($id);
    header("Location: listProduct_controller.php")
?>