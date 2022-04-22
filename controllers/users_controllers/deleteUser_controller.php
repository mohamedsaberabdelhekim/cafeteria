<?php 
    require_once("../../models/user_model.php");
    $user= new User ();

    $id=$_GET['id'];
    $user->delete($id);
    header("Location: listUser_controller.php")
?>