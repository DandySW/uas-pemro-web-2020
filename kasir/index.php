<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>
	<?php include('navbar.php'); ?>
	<div class="container">
		<?php include('cart_search_field.php'); ?>
		<div style="height: 80px;"></div>
		<div>
			<?php
			$inc = 4;
			$query = mysqli_query($conn, "SELECT * FROM product order by nama asc");
			while ($row = mysqli_fetch_array($query)) {

				$inc = ($inc == 4) ? 1 : $inc + 1;
				if ($inc == 1) echo "<div class='row'>";

			?>
				<div class="col-lg-3">
					<div>
						<img src="../<?php if (empty($row['foto'])) {
											echo "upload/noimage.jpg";
										} else {
											echo $row['foto'];
										} ?>" style="width: 230px; height:230px; padding:auto; margin:auto;" class="thumbnail">
						<div style="height: 10px;"></div>
						<div style="height:40px; width:230px; margin-left:17px;"><?php echo $row['nama']; ?></div>
						<div style="height: 10px;"></div>
						<div style="display:none; position:absolute; top:210px; left:10px;" class="well" id="cart<?php echo $row['productid']; ?>">Jumlah: <input type="text" style="width:40px;" id="qty<?php echo $row['productid']; ?>"> <button type="button" class="btn btn-primary btn-sm concart" value="<?php echo $row['productid']; ?>"><i class="fa fa-shopping-cart fa-fw"></i></button></div>
						<div style="margin-left:17px; margin-right:17px;">
							<button type="button" class="btn btn-primary btn-sm addcart" value="<?php echo $row['productid']; ?>"><i class="fa fa-shopping-cart fa-fw"></i> Tambahkan</button> <span class="pull-right"><strong>Rp <?php echo number_format($row['harga'], 2, ',', '.'); ?></strong></span>
						</div>
					</div>
				</div>
			<?php
				if ($inc == 4) echo "</div><div style='height: 30px;'></div>";
			}
			if ($inc == 1) echo "<div class='col-lg-3></div><div class='col-lg-3'></div><div class='col-lg-3'></div></div>";
			if ($inc == 2) echo "<div class='col-lg-3'></div><div class='col-lg-3'></div></div>";
			if ($inc == 3) echo "<div class='col-lg-3'></div></div>";
			?>
		</div>
	</div>
	<?php include('script.php'); ?>
	<?php include('modal.php'); ?>
	<script src="custom.js"></script>
</body>

</html>