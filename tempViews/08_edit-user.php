<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Add User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="../../assets/css/styles.css"
    />
  </head>

  <body>
    <main>
      <section class="main-padding">
        <div class="container">
          <h1>Edit User</h1>
          <form action="../users_controllers/editUser_controller.php" method="POST" class="form-horizontal">
            <div class="form-group row">
              <label for="" class="offset-sm-1 col-sm-2 control-label"
                >Name</label
              >
              <div class="col-sm-6">
                <input
                  class="form-control"
                  type="text"
                  placeholder="enter your name"
                  name="name"
                  value="<?= $user['user_name']?>"
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="offset-sm-1 col-sm-2 control-label"
                >Email</label
              >
              <div class="col-sm-6">
                <input
                  class="form-control"
                  type="email"
                  placeholder="enter your Email"
                  name="email"
                  value="<?= $user['user_email']?>"
                  
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="offset-sm-1 col-sm-2 control-label"
                >Password</label
              >
              <div class="col-sm-6">
                <input
                  class="form-control"
                  type="password"
                  placeholder="enter your password"
                  name="password"
                  id="password"
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="offset-sm-1 col-sm-2 control-label"
                >Confirm Password</label
              >
              <div class="col-sm-6">
                <input
                  class="form-control"
                  type="password"
                  placeholder="confirm your password"
                  id="confirm_password"

                />
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="offset-sm-1 col-sm-2 control-label"
                >Room No.</label
              >
              <div class="col-sm-6">
                <input
                  class="form-control"
                  type="text"
                  placeholder="enter your Room No."
                  name="room"
                  value="<?= $user['user_room']?>"
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="offset-sm-1 col-sm-2 control-label"
                >Ext.</label
              >
              <div class="col-sm-6">
                <input
                  class="form-control"
                  type="text"
                  placeholder="enter your Room No."
                  name="ext"
                  value="<?= $user['user_ext']?>"
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="offset-sm-1 col-sm-2 control-label"
                >Profile Picture</label
              >
              <div class="col-sm-6">
                <input
                  class="form-control"
                  type="file"
                  placeholder="enter your Room No."
                  name="img1[]"  multiple=""
                />
              </div>
            </div>
            <div class="form-group text-center">
            <input name="id" type="hidden" value="<?= $user['user_id']?>" />
              <button class="btn btn-default" name="submit" type="submit">Save</button>
            </div>
          </form>
        </div>
      </section>
    </main>
    <script src="../../assets/js/jquery-3.3.1.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/modules/07_add-user.js"></script>


     <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
  </body>
</html>
