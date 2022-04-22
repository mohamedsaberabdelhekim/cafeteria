<?php
    
    require_once("../../models/user_model.php");
    session_start();
    Class login
    {
        function getLoginUser($postArray){

            $user= new User ();
            $email='';
            $password='';
           
            
            if ( isset($postArray['submit']) ) 
            {
                $email=$postArray['email'];
                $password=$postArray['password'];
                $user= new User ();
                $users= $user->selectUserByEmail ($email,$password);
if($users)
{
$_SESSION['user_id']=$users['user_id'];
}
                
            }
        
        
        }    
    }
   
    include ("../../views/06_all-users.php");

?>
