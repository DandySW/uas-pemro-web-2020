<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pos";

$conn = new mysqli("$host", "$user", "$pass", "$db");

if ($conn->connect_error) {
	echo "Koneksi databse gagal -> " . $conn->connect_error;
}
