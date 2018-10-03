<?php
include_once("conn/conn.php");
// session_start();

$Team_Name = $Team_Pass = "";
$hashs = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Team_Name = test_input($_POST["Team_Name"]);
  //$Team = trim($_POST["Team"]);
  $Team_Pass = test_input($_POST["Team_Pass"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// function HashPassword($pass){
  $hashs = password_hash($Team_Pass,PASSWORD_DEFAULT);
  
//insert data
$sql = "INSERT INTO team_login (Team_Name, Team_Pass) 
VALUES ('$Team_Name', '$hashs')";

if (mysqli_query($conn, $sql)) { //ถ้า insert ได้จะเข้า new rec...
    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// ดูข้อมูลทั้งหมด ที่มีชื่อตรงกับ Team_Name
$sql = "SELECT * FROM team_login WHERE Team_Name = '$Team_Name'";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result);

//  echo $rows['Team_Name'];

$_SESSION['Team_Name'] = $_POST['Team_Name'];

mysqli_close($conn);

?>