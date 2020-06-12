<?php
include('session.php');
if (isset($_POST['add'])) {
	$id = $_POST['id'];

	$query = mysqli_query($conn, "SELECT * FROM cart WHERE productid='$id'");
	$row = mysqli_fetch_array($query);

	$newqty = $row['cartjumlah'] + 1;

	mysqli_query($conn, "UPDATE cart SET cartjumlah='$newqty' WHERE productid='$id'");
}
