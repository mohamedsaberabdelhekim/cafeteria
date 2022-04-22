<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/styles.css">
<!-- --------------------------------------------------------- -->



</head>

<body>

<main class="container">
    <h1 class="text-center">Add Product</h1>
    <section class="login">
      <form action="../order_controllers/addOrder_controller.php" method="POST" class="form-horizontal">
      <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Product1</label>
          <div class="col-sm-8">
            <input class="form-control" type="number" name="chicken" >
          </div>
      </div>    
       

       

        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Price1</label>
          <div class="col-sm-8">
             <input type="number" class="form-control" id="" name="price1">     
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Product2</label>
          <div class="col-sm-8">
            <input class="form-control" type="number" name="d" >
          </div>
      </div>    

      <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Price</label>
          <div class="col-sm-8">
             <input type="number" class="form-control" id="" name="price2">     
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Product2</label>
          <div class="col-sm-8">
            <input class="form-control" type="number" name="hgfhgf" >
          </div>
      </div>    

      <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Price</label>
          <div class="col-sm-8">
             <input type="number" class="form-control" id="" name="price2">     
          </div>
        </div>


        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">amount</label>
          <div class="col-sm-8">
             <input type="text" class="form-control" id="" name="amount" value="10" readonly>     
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">note</label>
          <div class="col-sm-8">
             <textarea style="width:150px;height:80px" class="form-control" id="" name="note" >  </textarea>   
          </div>
        </div>
      
        


        <div class="form-group text-center">
          <input class="btn btn-default" name ="submit" type="submit" value="save"/>
        

        </div>
      </form>

<!-- -------------------------------------------------------- -->
    
      
    </section>
  </main>

 
    <script src="../assets/js/jquery-3.3.1.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
<!-- ------------------------------------------------------------- -->
 
</body>

</html>


<!-- <?= $latestOrders[0]?> -->