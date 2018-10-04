<?php
include("conn/conn.php");

if ($_SERVER['REQUEST_METHOD']=='POST'){
$Team_Name = $_POST['Team_Name'];
$Team_Pass = $_POST['Team_Pass'];
}

// $sql = "SELECT * FROM registertopkan WHERE Team = '$Team' ";
// $result = mysqli_query($conn, $sql);
// // $row = mysqli_fetch_assoc($result);
// $row = mysqli_fetch_array($result);



$sql = "SELECT * FROM team_login WHERE Team_Name = '$Team_Name' ";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
$row = mysqli_fetch_array($result);
$passDB = $row['Team_Pass'];

if(!($row['Team_Name'] == $Team_Name && password_verify($Team_Pass, $passDB))){
    
    echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
        echo "window.history.back()";
        echo "</script>";

}

?>