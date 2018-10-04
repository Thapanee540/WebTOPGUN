<?php
include("conn/conn.php");
$file = fopen("info.csv","w");
if ($_SERVER['REQUEST_METHOD']=='POST'){
$Name = $_POST['Name'];
$Lastname = $_POST['Lastname'];
}


$sql = "SELECT * FROM team_register";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "show OK";
    while($row = mysqli_fetch_assoc($result)) {
    	echo "userid: " . $row["ID_user"]. "Team: " . $row["ID_Team"]. " " . $row["Team_type"]." " . $row["Team_Name"]." " . $row["University"]." " . $row["Member"]." " . $row["Adviser"]." " . $row["Email"]." " . $row["Daystartcamp"]."<br>";
    }
} else {
    echo "0 results";   
}
foreach ($row as $file)
  {
  fputcsv($row,explode($file));
  }

	fclose($file); 

//echo $row['Team_type']."<br>".$row['University']."<br>".$row['Adviser']."<br>".$row['Email']."<br>";
?>