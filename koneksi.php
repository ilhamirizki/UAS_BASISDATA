<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "rizkiilhami_311910424";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno($koneksi)) {
	//this for show failed

	echo "failed to connect to MySQL: " . mysqli_connect_error();

}
?>