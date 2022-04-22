<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Orders</title>
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
    <main class="admin-orders">
      <section class="main-padding">
        <div class="container">
          <h1>Orders</h1>
          <!-- ! table one  -->
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Order Date</th>
                <th scope="col">Name</th>
                <th scope="col">Room</th>
                <th scope="col">Ext</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- ! first order -->
              <?php foreach ($allOrders as $order) :?>
              <tr class="order">
                <td>
                  <i class="fa fa-plus-square"></i>
                  <span><?=$order['order_date_from']?></span>
                </td>
                <td><?=$order['user_name']?> </td>
                <td><?=$order['user_room']?></td>
                <td><?=$order['user_ext']?></td>
                <td><?=$order['order_status']?></td>
              </tr>
              <tr>
                <td colspan="5">
                  <div class="row">
                    <!-- each-item -->
                    <div class="col-sm-2">
                      <div class="each-order">
                        <img
                          src="https://via.placeholder.com/100"
                          class="w-100"
                          width="100"
                          height="100"
                          alt=""
                        />
                        <h5>tea</h5>
                        <input type="text" name="tea" value="15" hidden />
                        <span>15 LE</span>
                        <span>2</span>
                      </div>
                    </div>
                    <!-- each-item -->
                    <div class="col-sm-2">
                      <div class="each-order">
                        <img
                          src="https://via.placeholder.com/100"
                          class="w-100"
                          width="100"
                          height="100"
                          alt=""
                        />
                        <h5>tea</h5>
                        <input type="text" name="tea" value="15" hidden />
                        <span>15 LE</span>
                        <span>3</span>
                      </div>
                    </div>
                    <!-- each-item -->
                    <div class="col-sm-2">
                      <div class="each-order">
                        <img
                          src="https://via.placeholder.com/100"
                          class="w-100"
                          width="100"
                          height="100"
                          alt=""
                        />
                        <h5>tea</h5>
                        <input type="text" name="tea" value="15" hidden />
                        <span>15 LE</span>
                        <span>5</span>
                      </div>
                    </div>
                    <!-- each-item -->
                    <div class="col-sm-2">
                      <div class="each-order">
                        <img
                          src="https://via.placeholder.com/100"
                          class="w-100"
                          width="100"
                          height="100"
                          alt=""
                        />
                        <h5>tea</h5>
                        <input type="text" name="tea" value="15" hidden />
                        <span>15 LE</span>
                        <span>1</span>
                      </div>
                    </div>
                    <!-- order-total-price -->
                    <div class="col-sm-4 order-total-price">
                      <p>Total: EGP <span>34</span></p>
                    </div>
                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
              <!-- ! ./first order -->

              <!-- ! second order -->
              <tr class="order">
                <td>
                  <i class="fa fa-plus-square"></i>
                  <span>2019/03/10 10.30 AM</span>
                </td>
                <td>Mostafa Ali</td>
                <td>2010</td>
                <td>6506</td>
                <td>deliver</td>
              </tr>
              <tr>
                <td colspan="5">
                  <div class="row">
                    <!-- each-item -->
                    <div class="col-sm-2">
                      <div class="each-order">
                        <img
                          src="https://via.placeholder.com/100"
                          class="w-100"
                          width="100"
                          height="100"
                          alt=""
                        />
                        <h5>tea</h5>
                        <input type="text" name="tea" value="15" hidden />
                        <span>15 LE</span>
                        <span>2</span>
                      </div>
                    </div>
                    <!-- each-item -->
                    <div class="col-sm-2">
                      <div class="each-order">
                        <img
                          src="https://via.placeholder.com/100"
                          class="w-100"
                          width="100"
                          height="100"
                          alt=""
                        />
                        <h5>tea</h5>
                        <input type="text" name="tea" value="15" hidden />
                        <span>15 LE</span>
                        <span>3</span>
                      </div>
                    </div>
                    <!-- each-item -->
                    <div class="col-sm-2">
                      <div class="each-order">
                        <img
                          src="https://via.placeholder.com/100"
                          class="w-100"
                          width="100"
                          height="100"
                          alt=""
                        />
                        <h5>tea</h5>
                        <input type="text" name="tea" value="15" hidden />
                        <span>15 LE</span>
                        <span>5</span>
                      </div>
                    </div>
                    <!-- each-item -->
                    <div class="col-sm-2">
                      <div class="each-order">
                        <img
                          src="https://via.placeholder.com/100"
                          class="w-100"
                          width="100"
                          height="100"
                          alt=""
                        />
                        <h5>tea</h5>
                        <input type="text" name="tea" value="15" hidden />
                        <span>15 LE</span>
                        <span>1</span>
                      </div>
                    </div>
                    <!-- order-total-price -->
                    <div class="col-sm-4 order-total-price">
                      <p>Total: EGP <span>34</span></p>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- ! ./second order -->
            </tbody>
          </table>
        </div>
      </section>
    </main>

    <script src="../../assets/js/jquery-3.3.1.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/modules/10_admin-orders.js"></script>
  </body>
</html>
