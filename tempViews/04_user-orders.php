<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>My Orders</title>
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
    <main class="my-orders">
      <section class="main-padding">
        <div class="container">
          <h1>My Orders</h1>
          <!-- date-picker -->
          <form action="../order_controllers/userOrder_controller.php	" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="from-group">
                  <label for="start">Date from:</label>
                  <input type="date" class="form-control start" name="start" />
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="end">Date to:	<?php echo $dateFrom; ?></label>
									<input type="date" class="form-control end" name="end" />
									
								</div>
							
							</div>
							<input type="submit" name="submit" value="check"/>
            </div>
          </form>
          <!-- ./date-picker -->
        </div>
      </section>

      <section class="main-padding">
        <div class="container">
          <!-- user-orders -->
          <div class="user-orders">
            <!-- ! table one  -->
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Order Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
								<!-- * first order -->

								<?php foreach ($myOrder as $order) :?>
                <tr class="order">
                  <td>
                    <span><?=$order['order_date_from']?></span>
                    <i class="fa fa-plus-square"></i>
                  </td>
                  <td><?=$order['order_status']?></td>
									<td><span><?=$order['amount']?></span> EGP</td>
									
									<input type="text" name="id" value="<?= $order['order_id']?>" hidden />
								
                  <td><button class="cancel btn btn-danger">Cancel</button></td>
								</tr>
									
                <tr>
                  <!-- ! table two -->
                  <td colspan="4">
                    <div class="row">
                      <!-- each-item -->
                      <div class="col-sm-3">
                        <div class="each-order">
                          <img
                            src="https://via.placeholder.com/100"
                            class="w-100"
                            width="100"
                            height="100"
                            alt=""
                          />
                          <h5><?= $order['product_name']?></h5>
                          <input type="text" name="tea" value="15" hidden />
                          <span><?= $order['product_price']?> LE</span>
                          <span><?= $order['amount_product']?></span>
                        </div>
                      </div>
                      <!-- each-item -->
                      
                    </div>
                  </td>
                  <!-- ! ./table three -->
								</tr>
								<!-- * ./first order -->
								<?php endforeach; ?>
								<!-- * second order -->
							
								<!-- * ./Third order -->
              </tbody>
            </table>
						<!-- ! ./table one  -->
						
						<!-- total-price -->
						<div class="total-price">
								<h3>Total</h3>
								<h3>EGP <span>200</span></h3>
						</div>
						<!-- ./total-price -->
          </div>
        </div>
      </section>
    </main>

    <script src="../../assets/js/jquery-3.3.1.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/modules/04_user-orders.js"></script>
  </body>
</html>
