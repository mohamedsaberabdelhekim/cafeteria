<?php
    
    require_once("../../models/user_model.php");
    $user= new User ();
    $users= $user->selectAll();
    include ("../../tempViews/06_all-users.php");

?>