<?php
    require_once("../../models/order_model.php");

    $order=new Order();
    $allOrders= $order->selectALLOrders();



    include("../../tempViews/10_admin-orders.php");








?>