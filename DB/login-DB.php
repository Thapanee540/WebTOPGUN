<?php
include("conn/conn.php");

if ($_SERVER['REQUEST_METHOD']=='POST'){
$Team = $_POST['Team'];
$Password = $_POST['pass'];
}

$sql = "SELECT * FROM team_login WHERE Team_Name = '$Team' ";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
$row = mysqli_fetch_array($result);

// $passDB = $row['Team_Pass'];

// if(!($row['Team_Name'] == $Team && password_verify($Password, $passDB))){
    
//     echo "<script>";
//         echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
//         echo "window.history.back()";
//         echo "</script>";

// }

if($row['Team_Name'] ){
    // echo "Login OK";
}

?>