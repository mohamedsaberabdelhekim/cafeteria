<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/css/styles.css" />
</head>

<body>
    <main class="add-product">
        <section class="main-padding">
            <div class="container">
                <h1>Edit</h1>
                <form action='../products_controllers/editProduct_controller.php' method="post">
                    <div class="form-group row">
                        <label for="" class="offset-sm-1 col-sm-2 control-label">Product</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="name"
                                value="<?php echo $product['product_name'];?>" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="offset-sm-1 col-sm-2 control-label">Price</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" min="0.00" name="price" max="10000.00"
                                value="<?php echo $product['product_price'];?>" />
                        </div>
                        <div class="col-sm-1">
                            <span>EGP</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="offset-sm-1 col-sm-2 control-label">Category</label>
                        <div class="col-sm-4">
                            <select name="categoryID" class="form-control">
                                <?php
                              foreach($allCategories as $category)
                              echo"
                                <!-- <optgroup label='Hot Drinks'> -->
                                    <option value='".$category['category_id']."'>".$category['category_name']."</option>
                                    <!-- <option value='nescafe'>nescafe</option>
                                    <option value='hot chocolate'>hot chocolate</option> -->
                                <!-- </optgroup> -->
                                <!-- <optgroup label='Cold Drinks'> -->
                                    <!-- <option value='pepsi'>pepsi</option>
                                    <option value='water'>water</option>
                                    <option value='limon'>limon</option> -->
                                <!-- </optgroup> -->";
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <a href='../controllers/category_controllers/addCategory_controller.php'
                                class="btn btn-info w-100">Add Category</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="offset-sm-1 col-sm-2 control-label">Product Picture</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="file" name="img" placeholder="enter your Room No." />
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="hidden" name="id" value="<?php echo $product['product_id'];?>" />
                        <button class="btn btn-success" type="submit" name="submit">Save</button>
                        <button class="btn btn-info" type="reset">reset</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script src="../../assets/js/jquery-3.3.1.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>