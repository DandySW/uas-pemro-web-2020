<?php
include('session.php');
$pid = $_GET['id'];

$a = mysqli_query($conn, "SELECT * FROM product WHERE productid='$pid'");
$b = mysqli_fetch_array($a);

mysqli_query($conn, "DELETE FROM `product` WHERE productid='$pid'");

mysqli_query($conn, "INSERT INTO history (userid, action, productid, quantity, history_date) VALUES ('" . $_SESSION['id'] . "', 'Menghapus Barang', '$pid', '0', NOW())");

header('location:barang.php');
