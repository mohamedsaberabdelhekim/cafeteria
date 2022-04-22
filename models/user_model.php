<?php
class User 
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
    /////////////////////////////////////
    
    function upload( $file,$allowedExts,$maxsize, $uploadsDir) {
       
    
        for ($i = 0; $i < count($file['name']); $i++) {
            $errors = array();
            //print_r($_FILES);        
            $filename = $file['name'][$i];
            $fileex = explode('.', $filename);
            $fileext = strtolower(array_pop($fileex));
            $filesize = $file['size'][$i];
            $filetmpname = $file['tmp_name'][$i];
            //  var_dump($filetmpname);
            if (in_array($fileext, $allowedExts) === FALSE) {
                $errors[] = "Extension is not allowed!";
            }

            if ($filesize > $maxsize) {
                $errors[] = "File Size must be less than {$maxsize} KB!";
            }

            if (empty($errors)) {
                $random = rand(0, 9999);
                $fileUrl = $random . "_" . date("d-m-Y") . "_" . $filename;
                $destination = $uploadsDir.$random. "_" . date("d-m-Y") . "_" . $filename;
                move_uploaded_file($filetmpname, $destination);
                $filenames[] = $destination;
                
            } else {                
                foreach ($errors as $error) {
                    throw new Exception($error);
                }
            }
        } //end FOR loop 
        
        return $filenames;
    }

    ///////////////////////////////////////

     function insert($name,$email,$password,$image,$room,$ext,$check){
       
            $conn= $this->connectDb();
        //    $files=$this->upload($file, $allowedExts,$uploadsDir, $maxsize);
        // //    var_dump($files[0]);
        //    $im=$files[0];
            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO users ( user_name , user_email, user_password,
            user_image,user_room,user_ext,user_check) 
            VALUES (:name, :email, :password, :image, :room, :ext, :check)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':image', $im);
            $stmt->bindParam(':room', $room);
            $stmt->bindParam(':ext', $ext);
            $stmt->bindParam(':check', $check);

            $stmt->execute();
      
        $conn = null;
    }

    function selectAll (){ 
       
        $conn= $this->connectDb();
        $stmt= $conn->prepare("SELECT * FROM users;");
        $stmt->execute();
        $allUsers = $stmt->fetchAll();
        return $allUsers;
       
        $conn = null;

    }

    function delete($id){
        $conn=  $this->connectDb();
        $stmt= $conn->prepare("DELETE FROM users WHERE user_id=$id ;");
        $stmt->execute();
        // $userDeleted = $stmt->fetch();
        // return $userDeleted;
       
        $conn = null;
        
    }

    function selectUser ($id){
        $conn=  $this->connectDb();
        $stmt= $conn->prepare("SELECT * FROM users WHERE user_id=$id ;");
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
       
        $conn = null;
    }

    function updateUser ($id, $name,$email,$password,$image,$room,$ext ){
        $conn=  $this->connectDb();
        $stmt = $conn->prepare("UPDATE users SET user_name=:name, user_email=:email, user_password=:password,
        user_image=:image,user_room= :room ,user_ext=:ext WHERE user_id= :id ;") ;
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':room', $room);
        $stmt->bindParam(':ext', $ext);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
       
        $conn = null;
   
    }
}
?>