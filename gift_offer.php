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
     $email = $_POST['email'];
     

     $sql = "INSERT INTO demo.offer ( `email`, `date`)
      VALUES ( '$email', current_timestamp());";

     $result=mysqli_query($connection,$sql);

     if($connection ->query($sql) == true){
      // echo "Successfully Updated";
      $insert=true;
    }
 
}

?>