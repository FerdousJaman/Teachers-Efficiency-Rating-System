<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating</title>
</head>
<body>
    You can see ratings here
</body>
</html>


<?php 
     $host = "localhost";
     $dbusername = "root";
     $dbpassword = "";
     $dbname = "teer-form";
 
     $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
 
     if (mysqli_connect_error()){
 
       die('Connect Error ('. mysqli_connect_errno() .') '
       . mysqli_connect_error());
     }
 
     else{
 
         $sql = "SELECT Teachers_name, Course_code, AVG(avg) Avg_avg FROM rating GROUP BY Course_code";
       if ($conn->query($sql)){
           
        
       
     }
     else{
         echo "Error: ". $sql ."
         ". $conn->error;
     }
     $conn->close();
 
 
   }
 ?>