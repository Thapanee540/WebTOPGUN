<?php
include("conn/conn.php");

if ($_SERVER['REQUEST_METHOD']=='POST'){
$Name = $_POST['Name'];
$Lastname = $_POST['Lastname'];
}

$sql = "SELECT * FROM team_register WHERE Team_Name = '$Team_Name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
 
echo $row['Team_type']."<br>".$row['University']."<br>".$row['Adviser']."<br>".$row['Email']."<br>";

?>