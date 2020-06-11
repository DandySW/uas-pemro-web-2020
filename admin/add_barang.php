<?php
include('session.php');

$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$fileInfo = PATHINFO($_FILES["image"]["name"]);

if (empty($_FILES["image"]["name"])) {
	$location = "";
} else {
	if ($fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg" or $fileInfo['extension'] == "png") {
		$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
		move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
		$location = "upload/" . $newFilename;
	} else {
		$location = "";
?>
		<script>
			window.alert('Foto gagal ditambahkan. Tambahkan foto dengan format JPG, JPEG atau PNG saja!');
		</script>
<?php
	}
}

mysqli_query($conn, "INSERT INTO product (nama, harga, jumlah, foto) VALUES ('$name','$price','$qty','$location')");
$pid = mysqli_insert_id($conn);

mysqli_query($conn, "INSERT INTO history (userid, action, productid, quantity, history_date) VALUES ('" . $_SESSION['id'] . "', 'Menambahkan Barang', '$pid', '$qty', NOW())");

?>
<script>
	window.alert('Data Barang berhasil ditambahkan.');
	window.history.back();
</script>
<?php
?>