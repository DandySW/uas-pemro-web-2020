<?php
include('session.php');

if (isset($_POST['cart'])) {
	$id = $_POST['id'];
	$qty = $_POST['qty'];

	$query = mysqli_query($conn, "SELECT * FROM cart where productid='$id' and userid='" . $_SESSION['id'] . "'");
	if (mysqli_num_rows($query) > 0) {
		echo "Barang sudah di dalam keranjang";
	} else {
		mysqli_query($conn, "INSERT INTO cart (userid, productid, cartjumlah) values ('" . $_SESSION['id'] . "', '$id', '$qty')");
	}
}
