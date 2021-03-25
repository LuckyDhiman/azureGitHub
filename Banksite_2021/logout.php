<?php
    //start the session and get the data
    
    session_start();
//    session_unset();
//    session_destory();
   session_destroy();  
//    echo "";
   header("location: index.php");
?>