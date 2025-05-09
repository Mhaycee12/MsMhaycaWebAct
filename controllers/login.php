<?php



    include("conn.php");



  header('Content-Type: application/json');

  $data = json_decode(file_get_contents("php://input"), true); 


  $password = $data["pword"];
  $username = $data["uname"];


  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);


  if($result->num_rows > 0){
        echo "valid";

  } else {
      echo "invalid";
      }



?>