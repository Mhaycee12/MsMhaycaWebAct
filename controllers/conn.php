<?php
   $conn = new mysqli("localhost", "root", "", "ms.mhayca");

   if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);

    


   }


?>