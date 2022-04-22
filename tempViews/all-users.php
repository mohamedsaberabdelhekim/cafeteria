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

    <div><a href="../controllers/users_controller/listUser_controller.php">Add new user</a></div>

    <table border='1'>
    <thead>
    <tr> 
        <td>Name</td>
        <td>Room</td>
        <td>Ext.</td>
        <td colspan='2'>Actions</td>

    </tr>
    </thead>
    <tbody>
    <?php foreach ( $users as $user) :?>
        <tr>
            <td><?= $user['user_name'] ?></td>
            <td><?= $user['user_room'] ?></td>
            <td><?= $user['user_ext'] ?></td>
            <td>
            <form method="post" action="deleteUser_controller.php">
                <input type="hidden" name="id" value="<?= $user['user_id'] ?>" />
                <input type="submit" value="Delete"/>
            </form>
            </td>
            <td>
            <a href="editUserForm_controller.php?id=<?= $user['user_id'] ?>"> Edit </a></td>
            

        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

    <script src="../assets/js/jquery-3.3.1.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>