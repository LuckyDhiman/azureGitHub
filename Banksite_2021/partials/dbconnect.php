<?php
   $servername = "localhost:3307";
   $username = "root";
   $password = "";
   $database = "dbbank";

    // $conn = mysqli_connect($sever,$username,$password);
    $conn = mysqli_connect($servername, $username, $password,$database);

    if(!$conn){
        // echo "Success";
    // }
    // else{
        die("Error".mysqli_connect_error());
    }
?>