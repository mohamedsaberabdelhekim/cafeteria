<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/styles.css">
</head>

<body>

<main class="container">
    <h1 class="text-center">Add User</h1>
    <section class="login">
      <form action="../controllers/users_controllers/addUser_controller.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Name</label>
          <div class="col-sm-8">
            <input class="form-control" type="text" name="name" >
          </div>
      </div>    
        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Email</label>
          <div class="col-sm-8">
            <input class="form-control" type="email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Password</label>
          <div class="col-sm-8">
            <input class="form-control" type="password" name="password" >
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Confirm Password</label>
          <div class="col-sm-8">
            <input class="form-control" type="password" >
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Room No</label>
          <div class="col-sm-8">
             <input type="number" class="form-control" id="" name="room">     
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Ext.</label>
          <div class="col-sm-8">
             <input type="number" class="form-control" id="" name="ext">     
          </div>
        </div>
        
        <div class="form-group file-field">
          <label for="" class="col-sm-offset-1 col-sm-2 control-label">Profile Picture</label>

          <div class="btn btn-primary  btn-sm">
            
            <input type="file" name="img1[]"  multiple="">
          </div>
          <!-- <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload your file">
          </div> -->
        </div>
        




        <div class="form-group text-center">
          <input class="btn btn-default" name ="submit" type="submit" value="save"/>
          <button class="btn btn-default" type="reset">Reset</button>

        </div>
      </form>
      
    </section>
  </main>





    <script src="../assets/js/jquery-3.3.1.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>

</html>