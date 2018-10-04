<?php
include("conn/conn.php");

if ($_SERVER['REQUEST_METHOD']=='POST'){
$Name = $_POST['Name'];
$Lastname = $_POST['Lastname'];
}


$sql = "SELECT * FROM Datalogin WHERE NameThai = '$Name' or NameEng = '$Name' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
 
echo $row['NameThai']."<br>". $row['NameThai']."<br>";

if(($row['NameThai'] != $Name || $row['LastnameThai'] != $Lastname )){
    
    echo "<script>";
        echo "alert(\" ชื่อ หรือ  นามสกุล ไม่ถูกต้อง\");"; 
        echo "window.history.back()";
        echo "</script>";

}
// elseif($row['NameEng'] != $Name && $row['LastnameEng'] != $Lastname){
//     echo "<script>";
//         echo "alert(\" Name or surname incorrect\");"; 
//         echo "window.history.back()";
//         echo "</script>";
// }
/*else{
    echo "Login OK";
    echo "<br>".$row['NameThai']." ".$row['LastnameThai']."<br>" ;
    echo $row['NameEng']." ".$row['LastnameEng']."<br>" ;
}*/

?>