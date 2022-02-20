<?php

 $insert=false;
 
     define("DB_HOST", "localhost");
     define("DB_USERNAME", "root");
     define("DB_PASSWORD", "");
     define("port", "4000");

     $connection = mysqli_connect(DB_HOST.":".port, DB_USERNAME, DB_PASSWORD);

     if(!$connection){
         die("Connection failed due to " . mysqli_connect_error());  
     }
    
     // echo "Successfully connected to database";  
  

     if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $phone_no = $_POST['phone_no'];
     $website = $_POST['website'];
     $subject = $_POST['subject'];
     $massage = $_POST['massage'];

     
     $sql = "INSERT INTO demo.contact ( `name`,`email`,`address`,`phone_no`,`website`,`subject`,`massage`, `date`)
      VALUES ( '$name','$email','$address','$phone_no','$website','subject','$massage', current_timestamp());";

     $result=mysqli_query($connection,$sql);

     if($connection ->query($sql) == true){
      // echo "Successfully Updated";
      $insert=true;
    }
 
}

?>