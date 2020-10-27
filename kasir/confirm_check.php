<?php
include('session.php');
$total = $_GET['total'];

if (preg_match("/^[0-9,]+$/", $total)) {
	$new = $total;
} else {
	$new = str_replace(',', '', $total);
}

$nomor = rand(111111, 999999);

//tabel transaksi
mysqli_query($conn, "INSERT INTO transaksi (nomor_transaksi,userid, transaksi_total, transaksi_date) values ('$nomor','" . $_SESSION['id'] . "', '$new', NOW())", $bayar);
$sid = mysqli_insert_id($conn);

$query = mysqli_query($conn, "SELECT * FROM cart WHERE userid='" . $_SESSION['id'] . "'");

//$row = tabel cart
while ($row = mysqli_fetch_array($query)) {
	mysqli_query($conn, "INSERT INTO transaksi_detail (transaksi_id, productid, transaksi_jumlah) VALUES ('$sid', '" . $row['productid'] . "', '" . $row['cartjumlah'] . "')");

	//$prorow = tabel barang
	$pro = mysqli_query($conn, "SELECT * FROM product WHERE productid='" . $row['productid'] . "'");
	$prorow = mysqli_fetch_array($pro);

	//jumlah baru --> jumlah produk - produk cart
	$newqty = $prorow['jumlah'] - $row['cartjumlah'];

	//mengupdate jumlah barang
	mysqli_query($conn, "UPDATE product SET jumlah='$newqty' where productid='" . $row['productid'] . "'");

	mysqli_query($conn, "INSERT INTO history (userid, action, productid, quantity, history_date) VALUES ('" . $_SESSION['id'] . "', 'Melakukan Penjualan', '" . $row['productid'] . "', '" . $row['cartjumlah'] . "', NOW())");
}

mysqli_query($conn, "DELETE FROM cart where userid='" . $_SESSION['id'] . "'");
header('location: history.php');
