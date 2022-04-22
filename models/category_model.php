<?php
class Category 
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

     function insert($name){
       
            $conn= $this->connectDb();
           
            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO categories ( category_name) 
            VALUES (:name)");
            $stmt->bindParam(':name', $name);
            $stmt->execute();
      
        $conn = null;
    }

    function selectAll (){ 
       
        $conn= $this->connectDb();
        $stmt= $conn->prepare("SELECT * FROM categories;");
        $stmt->execute();
        $allCategories = $stmt->fetchAll();
        return $allCategories;
       
        $conn = null;

    }

  
}
?>