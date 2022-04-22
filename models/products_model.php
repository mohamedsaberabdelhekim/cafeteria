<?php
class Product 
{

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

     function insert($name,$image,$price,$status,$categoryID){
       
            $conn= $this->connectDb();
           
            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO products ( product_name , product_image, product_price,
            product_status,category_id) 
            VALUES (:name, :image, :price, :status, :categoryID)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':categoryID', $categoryID);

            $stmt->execute();
      
        $conn = null;
    }

    function selectAll (){ 
       
        $conn= $this->connectDb();
        $stmt= $conn->prepare("SELECT * FROM products;");
        $stmt->execute();
        $allProducts = $stmt->fetchAll();
        return $allProducts;
       
        $conn = null;

    }

    function delete($id){
        $conn=  $this->connectDb();
        $stmt= $conn->prepare("DELETE FROM products WHERE product_id=$id ;");
        $stmt->execute();
        // $userDeleted = $stmt->fetch();
        // return $userDeleted;
       
        $conn = null;
        
    }

    function selectProduct ($id){
        $conn=  $this->connectDb();
        $stmt= $conn->prepare("SELECT * FROM products WHERE product_id=$id ;");
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
       
        $conn = null;
    }

    function updateProduct ($id,$name,$image,$price,$status,$categoryID){
        $conn=  $this->connectDb();
        $stmt = $conn->prepare("UPDATE products SET  product_name=:name, product_image=:image, product_price=:price,
        product_status=:status,category_id=:categoryID  WHERE product_id= :id ;") ;
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':categoryID', $categoryID);
        $stmt->bindParam(':id', $id );

        $stmt->execute();
        
       
        $conn = null;
   
    }
}
?>