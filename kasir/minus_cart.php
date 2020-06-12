<?php
include('session.php');
if (isset($_POST['min'])) {
	$id = $_POST['id'];

	$query = mysqli_query($conn, "SELECT * FROM cart WHERE productid='$id'");
	$row = mysqli_fetch_array($query);

	$newqty = $row['cartjumlah'] - 1;

	if ($newqty == 0) {
		mysqli_query($conn, "DELETE FROM cart WHERE productid='$id'");
	} else {
		mysqli_query($conn, "UPDATE cart SET CARTJUMLAH='$newqty' WHERE productid='$id'");
	}
}
