<?php



    include("conn.php");



  header('Content-Type: application/json');

  $data = json_decode(file_get_contents("php://input"), true); 
  $fullname = $data["fname"];
  $email = $data["mail"];
  $password = $data["pword"];
  $username = $data["uname"];


  $sql = "INSERT INTO users (fullname,email,username,password) VALUES ('$fullname','$email','$username','$password')";
  $result = $conn->query($sql);


  if($result->num_rows > 0){
        echo "valid";

  } else {
      echo "invalid";
      }



?>