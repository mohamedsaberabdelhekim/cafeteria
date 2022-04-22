<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ITI Cafeteria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="assets/css/styles.css"
    />
  </head>

  <body>
    <main class="container">
      <h1 class="text-center">Cafeteria</h1>
      <section class="login">
        <form action="" method="POST" class="form-horizontal">
          <div class="form-group row">
            <label for="" class="offset-sm-1 col-sm-2 control-label"
              >Email</label
            >
            <div class="col-sm-8">
              <input
                class="form-control"
                type="email"
                placeholder="enter your Email"
              />
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="offset-sm-1 col-sm-2 control-label"
              >Password</label
            >
            <div class="col-sm-8">
              <input
                class="form-control"
                type="password"
                placeholder="enter your password"
              />
            </div>
          </div>
          <div class="form-group text-center">
            <button class="btn btn-success" type="submit">Login</button>
          </div>
        </form>
        <div class="forget-password text-center">
          <a href="views/02_user.html">Forget Password?</a>
        </div>
      </section>
    </main>

    <script src="./assets/js/jquery-3.3.1.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
