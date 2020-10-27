<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "uas182410101001";

$conn = new mysqli("$host", "$user", "$pass", "$db");

if ($conn->connect_error) {
	echo "Koneksi databse gagal -> " . $conn->connect_error;
}
