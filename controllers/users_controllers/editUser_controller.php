<?php

require_once("../../models/user_model.php");

class EditUser{

    function edit(){
        $user= new User ();

        $name='';
        $email='';
        $password='';
        $room='';
        $ext='';
        $image='';
        $check='';
        if ( isset($_POST['submit']) ) {
            
            $id= $_POST['id'];
            $name = isset($_POST['name']) ?  $_POST['name'] :NULL;
            $email = isset($_POST['email']) ?  $_POST['email'] :NULL;
            $password = isset($_POST['password']) ?  $_POST['password'] :NULL;
            $room = isset($_POST['room']) ?  $_POST['room'] :NULL;
            $ext = isset($_POST['ext']) ?  $_POST['ext'] :NULL;
            $image = isset($_POST['img']) ?  $_POST['img'] :NULL;
            header("Location: listUser_controller.php");

        }
       $user->updateUser ($id, $name,$email,$password,$image,$room,$ext );
    }
    }

    $user= new EditUser();
    $user->edit();
?>