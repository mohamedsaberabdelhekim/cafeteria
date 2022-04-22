<?php
session_start();
ob_start();
    require_once("../../models/user_model.php");

    
class AddUser{
    

     function index($FILES1){

        $user= new User ();


        $name='';
        $email='';
        $password='';
        $room='';
        $ext='';
        $image='';
        $check='';
        
        if ( isset($_POST['submit']) ) {
           
            if (isset($FILES1)) {
                
                    // $file =$FILES1['img1'];
                    $allowedExts = array('jpg', 'png');
                    $uploadsDirecotry = "../../resources/uploads/";
                    $maxSize = 4000000;
                    // var_dump($_FILES);
                 
                
            }
            $name = isset($_POST['name']) ?  $_POST['name'] :NULL;
            $email = isset($_POST['email']) ?  $_POST['email'] :NULL;
            $password = isset($_POST['password']) ?  $_POST['password'] :NULL;
            $room = isset($_POST['room']) ?  $_POST['room'] :NULL;
            $ext = isset($_POST['ext']) ?  $_POST['ext'] :NULL;
            $image = isset($_POST['img']) ?  $_POST['img'] :NULL;
           
            $check = NULL;
            // var_dump($name);
            //$this->userService->
            $user->insert($name,$email,$password,$image,$room,$ext,$check); 
           # $_SESSION['form_message'] = "Data Updated Successfully";
        }  

        
    }

    }
    $users= new AddUser();
   // var_dump($_FILES);
    // $userEdit= new User();
    // $user= $userEdit->selectUser($id);
    $users->index($_FILES);
    include ("../../tempViews/07_add-user.php");

?>
