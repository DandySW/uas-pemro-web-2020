<?php
include('session.php');
$total = $_GET['total'];

if (preg_match("/^[0-9,]+$/", $total)) {
	$new = $total;
} else {
	$new = str_replace(',', '', $total);
}

mysqli_query($conn, "INSERT INTO transaksi (userid, transaksi_total, transaksi_date) values ('" . $_SESSION['id'] . "', '$new', NOW())");
$sid = mysqli_insert_id($conn);

$query = mysqli_query($conn, "SELECT * FROM cart where userid='" . $_SESSION['id'] . "'");
while ($row = mysqli_fetch_array($query)) {
	mysqli_query($conn, "INSERT INTO transaksi_detail (transaksi_id, productid, transaksi_jumlah) values ('$sid', '" . $row['productid'] . "', '" . $row['cartjumlah'] . "')");

	$pro = mysqli_query($conn, "SELECT * FROM product where productid='" . $row['productid'] . "'");
	$prorow = mysqli_fetch_array($pro);

	$newqty = $prorow['jumlah'] - $row['cartjumlah'];

	mysqli_query($conn, "UPDATE product SET jumlah='$newqty' where productid='" . $row['productid'] . "'");

	mysqli_query($conn, "INSERT INTO history (userid, action, productid, quantity, history_date) values ('" . $_SESSION['id'] . "', 'Melakukan penjualan', '" . $row['productid'] . "', '" . $row['qty'] . "', NOW())");
}

mysqli_query($conn, "delete from cart where userid='" . $_SESSION['id'] . "'");
header('location: history.php');
