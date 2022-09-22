<?php 
$servername ="127.0.0.1";
$username ="root";
$password ="";
$database="db_mhs";

// Create connection
$koneksi=new mysqli ($servername,$username,$password,$database);

// check connection
if (!$koneksi) {
	die("connection failed :".mysqli_connect_error());
}

?>

