<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "topgun_db";

$servername = "localhost";
$username = "plearnja_tgr2019";
$password = "RNhdK8BH";
$dbname = "plearnja_tgr2019";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ftp.plearnjai.com

// FTP
// username: tgr2019@plearnjai.com
// password: VDNe4WnCVk

// DB
// Database:	plearnja_tgr2019
// Host:	localhost
// Username:	plearnja_tgr2019
// Password:	RNhdK8BH

?>