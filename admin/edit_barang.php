<?php

include('session.php');
$id = $_GET['id'];

$p = mysqli_query($conn, "SELECT * FROM product WHERE productid='$id'");
$prow = mysqli_fetch_array($p);

$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$fileInfo = PATHINFO($_FILES["image"]["name"]);

if (empty($_FILES["image"]["name"])) {
	$location = $prow['foto'];
} else {
	if ($fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg" or $fileInfo['extension'] == "png") {
		$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
		move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
		$location = "upload/" . $newFilename;
	} else {
		$location = $prow['foto'];
?>
		<script>
			window.alert('Foto gagal diubah. Tambahkan foto dengan format JPG, JPEG atau PNG saja!');
		</script>
<?php
	}
}

mysqli_query($conn, "UPDATE product SET nama='$name', harga='$price', jumlah='$qty', foto='$location' where productid='$id'");

if ($qty != $prow['jumlah']) {

	mysqli_query($conn, "INSERT INTO history (userid, action, productid, quantity, history_date) VALUES ('" . $_SESSION['id'] . "', 'Mengubah Barang', '$id', '$qty', NOW())");
}
?>
<script>
	window.alert('Data Barang berhasil diubah.');
	window.history.back();
</script>
<?php

?>