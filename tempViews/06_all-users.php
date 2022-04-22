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
    <main class="admin-all-users">
      <section class="main-padding">
        <div class="container">
          <h1>All Users</h1>
          <div class="add-user">
            <a href="./addUser_controller.php" class="btn btn-info">Add User</a>
          </div>
          <!-- users-panel -->
          <div class="users-panel">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Room</th>
                  <th scope="col">Image</th>
                  <th scope="col">Ext</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- each-user -->
                <?php foreach ( $users as $user) :?>
                <tr class="each-user">
                  <td><?= $user['user_name'] ?></td>
                  <td><?= $user['user_room'] ?></td>
                  <td>
                    <img
                      src="https://via.placeholder.com/50"
                      width="50"
                      height="50"
                      alt=""
                    />
                  </td>
                  <td>
                  <?= $user['user_ext'] ?>
                  </td>
                  <td>
                    <div>
                    <a href="editUserForm_controller.php?id=<?= $user['user_id'] ?>"> <button class="edit btn btn-secondary">edit</button> </a>
                    <a href="deleteUser_controller.php?id=<?= $user['user_id'] ?>"> <button class="delete btn btn-danger">delete</button> </a>

                    </div>
                  </td>
                </tr>

                <?php endforeach; ?>
                <!-- ./each-user -->
                <!-- each-user -->
               
                <!-- ./each-user -->
              </tbody>
            </table>
          </div>
          <!-- ./users-panel -->
        </div>
      </section>
    </main>
    <script src="../../assets/js/jquery-3.3.1.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/modules/06_all-users.js"></script>
  </body>
</html>
