<?php

include("../conn/conn.php");

$Team_Name="eee";
$sql_login = "SELECT * FROM team_login WHERE Team_Name = '$Team_Name'";
$result_login = mysqli_query($conn, $sql_login);
$row_login = mysqli_fetch_assoc($result_login);
// $ID_team = $row_login["ID"];

// echo ">>>> id team".$row_login["ID"]."<br>";
if (mysqli_query($conn, $sql_login)) { //ถ้า insert ได้จะเข้า new rec...
  echo "New record created successfully sql_login"."<br>";
  echo ">>>> id team".$row_login["ID"]."<br>";
} else {
  echo "Error: " . $sql_login . "<br>" . mysqli_error($conn);
}

echo "<<<< Show login >>>>>>";

?>