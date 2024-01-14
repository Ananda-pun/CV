<?php 
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $db_name = "portfolio";

    $con = new mysqli($servername, $username, $password, $db_name);

   if(!$con){
    echo "Error: " . $con->error;
   }
?>