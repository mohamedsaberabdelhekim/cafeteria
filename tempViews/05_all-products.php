<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>All Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/css/styles.css" />
</head>

<body>
    <main class="admin-all-products">
        <section class="main-padding">
            <div class="container">
                <h1>All Products</h1>
                <div class="add-product">
                    <a href="../products_controllers/addProduct_controller.php" class="btn btn-info">Add
                        Product</a>
                </div>
                <!-- products-panel -->
                <div class="products-panel">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- each-product -->

                            <?php
                           
                            foreach($allProducts as $product){
                               echo " 
                            <tr class='each-product'>
                                <td>".$product['product_name']."</td>
                                <td><span>".$product['product_price']."</span> EGP</td>
                                <td>
                                    <img src='".$product['product_image']."' width='50' height'50' alt='' />
                                </td>
                                <td>
                                    <div>
                                        <button class='available btn btn-primary'>"
                                         .$product['product_status'].   
                                        "</button>";
                                   echo"<a href='editProductForm_controller.php?id=";echo $product['product_id']."'> <button class='edit btn btn-secondary'>edit</button> </a>";
                                echo"<a href='deleteProduct_controller.php?id=";echo $product['product_id']."'> <button class='edit btn btn-secondary'>delete</button> </a>";
                                   echo" </div>
                                </td>
                            </tr>";
                            }
                            ?>
                            <!-- ./each-product -->

                            <!-- ./each-product -->
                        </tbody>
                    </table>
                </div>
                <!-- ./products-panel -->
            </div>
        </section>
    </main>

    <script src="../../assets/js/jquery-3.3.1.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/modules/05_all-products.js"></script>
</body>

</html>