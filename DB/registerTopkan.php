<?php
include_once("conn/conn.php");

$Team = $pass = "";
$hashs = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Team = test_input($_POST["Team"]);
  //$Team = trim($_POST["Team"]);
  $pass = test_input($_POST["pass"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// function HashPassword($pass){
  $hashs = password_hash($pass,PASSWORD_DEFAULT);
  // return $hashs;
// }
// echo ">>> ".$hashs;
// echo "<h2>Your Input:</h2>";
// echo $Team."<br>".$pass."<br>".$age."<br>".$address."<br>".$gender."<br>";

//insert data
$sql = "INSERT INTO registertopkan (Team, Passwords) 
VALUES ('$Team', '$hashs')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) { //ถ้า insert ได้จะเข้า new rec...
    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>