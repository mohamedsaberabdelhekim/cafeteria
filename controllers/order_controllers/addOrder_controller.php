<?php
require_once("../../models/order_model.php");
require_once("../../models/products_model.php");
   

class OrderController
{
 
function getLatestOrder()
{
   $order=new Order();
   $latest=$order->selectLatestOrder(14);
   // var_dump($latest[0]);
   return $latest;
//    var_dump("dkfjdkf");
}
function getAllProducts()
{
   $product= new Product ();
   $allProducts= $product->selectAll();
   // var_dump($allProducts);
   return $allProducts;
}

function getProductIDAndAmount()
{
   $allProd=$this->getAllProducts();
   // var_dump($allProd);
   $order=new Order();
   if ( isset($_POST['submit']) ) {
      
      $length=count($_POST)-3;
     $keys=array_keys($_POST);
    
     $realKeys=array_slice($keys,0,$length);
     $products_id=array();
     $products_amount=array();
     $products_price=array();
     $products_total=array();
     $count=0;
   //  var_dump( $realKeys);
      for($i=0;$i<$length;$i+=1)
      {
       
           $products_id[$count]=$order->getId($realKeys[$i]);
           $products_total[$i]=$_POST[$realKeys[$i]];
           $products_price[$i]=$order->getPrice( $realKeys[$i]);
         $count++;
        
      }

      for($j=0;$j<$length;$j+=1)
      {
         // var_dump($products_price[$j]["product_price"]);
       
         if($products_price[$j]["product_price"]!=0)
           $products_amount[$j]=$products_total[$j]/$products_price[$j]["product_price"];
         
           
      }
      
return[$products_id,$products_amount];

   //  var_dump($products_id);
   
  }
}

function add()
{
   $order=new Order();
   $products_id=array();
     $products_amount=array();
   if ( isset($_POST['submit']) ) {
        $amount=$_POST['amount'];
        $note=$_POST['notes'];
        $user_id=14;

$id=$order->insertOrder($note,$amount,$user_id);
// var_dump($id);
$orderController=new OrderController();
[ $products_id,$products_amount]=$orderController->getProductIDAndAmount();

$length=count($products_id);
 
for($i=0;$i<$length;$i++)
{
   $order_id=$id;
   $product_id=$products_id[$i][0];
  $amount_product=$products_amount[$i];
   $order->insertProductOrder($order_id,$product_id,$amount_product);

}


   }
}



}

$order=new OrderController();
 $latestOrders=$order->getLatestOrder();
 $allProd=$order->getAllProducts();

 if ( isset($_POST['submit']) ) {

     $order->add();
     $latestOrders=$order->getLatestOrder();
 }























include('../../tempViews/02_user.php');
?>