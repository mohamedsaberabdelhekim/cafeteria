<?php
require_once("../../models/order_model.php");


// if(){


// }
// // class UserOrder{
//     function getOrder(){
//         $order=new Order();
//         $myOrder= $order->selectOrder(14);
//         return $myOrder;    
//     }

//     // function getProducts(){
//     //     $order=new Order();
//     //     return $orderID;

//     // }

//     function getDate(){
         $dateFrom="";
        $dateTo= "";
        $id=14;

        if ( isset($_POST['submit']) ) {
            $dateFrom= $_POST['start'];
            $dateTo=  $_POST['end'];
            $order=new Order();
             $myOrder= $order->selectOrder($id,$dateFrom,$dateTo);
             
          

        }
       
    // }
// }

// $userOrder=new UserOrder();
// $myOrder=$userOrder->getOrder();
// $userOrder->getDate();


include("../../tempViews/04_user-orders.php");
?>