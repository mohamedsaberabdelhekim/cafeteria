<?php
    require_once("../../models/user_model.php");
    $id = $_GET['id'];
    $u= new User ();
    $user= $u->selectUser($id);
    include ("../../tempViews/08_edit-user.php")

?>