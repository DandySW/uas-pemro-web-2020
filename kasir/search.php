<?php
include('session.php');
if (isset($_POST['ss'])) {
	$search = $_POST['name'];
	$query = mysqli_query($conn, "SELECT * FROM `product` where nama like '%$search%' limit 5");
	if (mysqli_num_rows($query) == 0) {

?>
		<div style="position:relative; left:12px; top:10px;">Hasil yang dicari tidak ditemukan</div>
		<?php

	} else {

		while ($row = mysqli_fetch_array($query)) {
		?>

			<div style="position:relative; left:12px; top:10px;">
				<a href="search_result.php?id=<?php echo $row['productid']; ?>"><?php echo $row['nama']; ?></a><br><br>
			</div>

<?php
		}
	}
}
?>