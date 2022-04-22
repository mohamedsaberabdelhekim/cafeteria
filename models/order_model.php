<?php

class Order{

function connectDb (){


    $servername = "localhost";
    $username = "root";
    $dbname = "cafeteria";
    try{

    
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, "root");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e)
        {
         echo "Error: " . $e->getMessage();
        }
}


function insertOrder($note,$amount,$user_id){
       
    $conn= $this->connectDb();
   
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO orders (note,amount,user_id) 
    VALUES (:note, :amount, :user_id)");
    $stmt->bindParam(':note', $note);
    $stmt->bindParam(':amount', $amount);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    $statement=$conn->prepare("SELECT LAST_INSERT_ID();");
    $statement->execute();
    $id=$statement->fetch();
    $conn = null;
   return $id[0];
}


function insertProductOrder($order_id,$product_id,$amount_product){
       
    $conn= $this->connectDb();
   
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO product_order (order_id,product_id,amount_product) 
    VALUES (:order_id, :product_id, :amount_product)");
    $stmt->bindParam(':order_id', $order_id);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':amount_product', $amount_product);
    $stmt->execute();
   
    $conn = null;
   
}


function selectLatestOrder ($user_id){
    $conn=  $this->connectDb();
    
    $stmt= $conn->prepare("SELECT products.product_name,products.product_image from products,product_order WHERE product_order.product_id=products.product_id AND product_order.order_id=(SELECT orders.order_id FROM orders WHERE orders.user_id=14 order BY orders.order_date_from DESC LIMIT 1);");
    $stmt->execute();
    $product = $stmt->fetchAll();
    return $product;
  
    $conn = null;
}



function getId($product_name)
{

    $conn=  $this->connectDb();
    
    $stmt= $conn->prepare("SELECT products.product_id from products WHERE products.product_name='$product_name' ;");
    $stmt->execute();
    $product_id = $stmt->fetch();
    return $product_id;
   
    $conn = null;

}

function getPrice($product_name)
{

    $conn=  $this->connectDb();
    
    $stmt= $conn->prepare("SELECT products.product_price from products WHERE products.product_name='$product_name' ;");
    $stmt->execute();
    $product_price = $stmt->fetch();
    return $product_price;
   
    $conn = null;

}

function selectOrder($id,$dateFrom,$dateTo){
    $conn=  $this->connectDb();
    
    $stmt= $conn->prepare("select * from products,orders,product_order where orders.order_id=product_order.order_id and products.product_id =product_order.product_id and '".$dateFrom."' <= orders.order_date_from and orders.order_date_from <=  '".$dateTo."' and orders.user_id='".$id."'
    ;");
    $stmt->execute();
    $order= $stmt->fetchAll();
    return $order;
}

function selectALLOrders(){
    $conn=  $this->connectDb();
    
    $stmt= $conn->prepare("select * from users, products,orders,product_order where orders.order_id=product_order.order_id and products.product_id =product_order.product_id and users.user_id = orders.user_id ;");
    $stmt->execute();
    $order= $stmt->fetchAll();
    return $order;
}
}
?>

<!-- SELECT products.product_name,products.product_image from products,product_order WHERE product_order.product_id=products.product_id
AND product_order.order_id=(SELECT orders.order_id FROM orders WHERE orders.user_id=14 order BY orders.order_date_from DESC LIMIT 1); -->