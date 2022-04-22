<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
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
    <!-- navbar -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- container -->
        <div class="container">
          <a class="navbar-brand" href="#">ITI Cafeteria</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Manual Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Checks</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input
                class="form-control mr-sm-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <div class="my-2 my-sm-0">
                <img
                  src="../assets/img/userAvatar.png"
                  width="50"
                  height="50"
                  alt="userAvatar"
                />
                <span>Admin</span>
              </div>
            </form>
          </div>
        </div>
        <!-- ./container -->
      </nav>
    </header>
    <!-- ./navbar -->

    <main>
      <section class="main-padding">
        <div class="container">
          <div class="row">
            <!-- orders-panel -->
          
            <div class="col-md-4">
              <form action="../order_controllers/addOrder_controller.php" method="POST">
                <div class="orders-panel">
                  <!-- choosen-items -->
                  <div class="choosen-items">
                    <ul class="list-unstyled">
                      <!-- item-info -->
                      <!-- <li>
                        <div class="item-info">
                          <h5>Tea</h5>
                          <div class="item-counter">
                            <span>1</span>
                            <i class="add">+</i>
                            <i class="sub">-</i>
                          </div>
                          <div class="price">
                            <span>EGP <span>25</span></span>
                            <i class="remove">X</i>
                          </div>
                          <input type="text" name="tea" value="25" hidden />
                          <span class="itemPrice hidden">25</span>
                        </div>
                      </li> -->
                      <!-- item-info -->
                      <!-- <li>
                        <div class="item-info">
                          <h5>Tea</h5>
                          <div class="item-counter">
                            <span>1</span>
                            <i class="add">+</i>
                            <i class="sub">-</i>
                          </div>
                          <div class="price">
                            <span>EGP <span>10</span></span>
                            <i class="remove">X</i>
                          </div>
                          <input type="text" name="tea" value="10" hidden />
                          <span class="itemPrice hidden">10</span>
                        </div>
                      </li> -->
                    </ul>
                  </div>
                  <!-- ./choosen-items -->
                  <!-- items-notes -->
                  <div class="items-notes">
                    <label>Notes</label>
                    <textarea name="notes"></textarea>
                  </div>
                  <!-- ./items-notes -->
                  <!-- room -->
                  <div class="room">
                    <label>Room</label>
                    <select>
                      <option value="CompoBox">CompoBox</option>
                      <option value="test1">test1</option>
                      <option value="test2">test2</option>
                    </select>
                  </div>
                  <!-- ./room -->
                  <!-- total-price -->
                  <div class="total-price">
                    <span>EGP <span>0</span></span>
                    <input type="text" name="amount" value="" hidden />
                  </div>
                  <!-- ./total-price -->
                  <!-- confirm -->
                  <div class="confirm">
                  <input type="submit" name="submit" value="confirm" class="btn btn-success">
                  
                  </div>
                  <!-- confirm -->
                </div>
              </form>
            </div>
            <!-- ./orders-panel -->

            <!-- all-products -->
            <div class="col-md-8">
              <div class="all-products">
                <!-- latest-orders -->
                <div class="latest-orders">
                  <h3>Latest Orders</h3>
                  <div class="row">
                  <!-- each-order -->
                  <?php foreach ($latestOrders as $latestOrder) :?>
                  <div class="col-sm-3">
                    <div class="each-order">
                      <img
                        src="<?=$latestOrder[1]?>"
                        class="w-100"
                        width="100"
                        height="100"
                        alt=""
                      />
                      <h5><?= $latestOrder[0]?></h5>
                      <input type="text" name="<?= $latestOrder[0]?>" hidden />
                    </div>
                  </div>
                  <?php endforeach; ?>
                    
                  </div>
                </div>
                <!-- latest-orders -->
                <!-- products -->
                <div class="products">
                  <h3>Products</h3>
                  <div class="row">

                      <!-- each-order -->
                      <?php foreach ($allProd as $allProduct) :?>
                      <div class="col-sm-3">
                        <div class="each-order">
                          <img
                            src="<?= $allProduct[2]?>"
                            class="w-100"
                            width="100"
                            height="100"
                            alt=""
                          />
                          <h5><?= $allProduct[1]?></h5>
                          <input type="text" name="<?= $allProduct[1]?>" value="<?= $allProduct[3]?>" hidden />
                          <span><?= $allProduct[3]?> LE</span>
                        </div>
                      </div>
                      <?php endforeach; ?>
              
                  



                  </div>
                </div>
                <!-- products -->
              </div>
              <!-- ./all-products -->
            </div>
          </div>
          <!-- ./row -->
        </div>
        <!-- ./container -->
      </section>
    </main>

   
    <script src="../../assets/js/jquery-3.3.1.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/modules/02_users.js"></script>
  </body>
</html>
