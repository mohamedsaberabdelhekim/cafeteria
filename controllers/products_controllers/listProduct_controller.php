<?php
    
    require_once("../../models/products_model.php");
    $product= new Product ();
    $allProducts= $product->selectAll();
    include ('../../tempViews/05_all-products.php');

?>