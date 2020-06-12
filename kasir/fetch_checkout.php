<?php
include('session.php');
if (isset($_POST['check'])) {
?>
	<table width="100%" class="table table-striped table-bordered table-hover">
		<thead>
			<th></th>
			<th>Nama Barang</th>
			<th>Ketersediaan</th>
			<th>Harga</th>
			<th>Jumlah Dibeli</th>
			<th>SubTotal</th>
		</thead>
		<tbody>
			<form method="POST" action="">
				<?php
				$total = 0;
				$query = mysqli_query($conn, "SELECT * FROM cart LEFT JOIN product ON product.productid=cart.productid where userid='" . $_SESSION['id'] . "'");
				while ($row = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><button type="button" class="btn btn-danger btn-sm remove_prod" value="<?php echo $row['productid']; ?>"><i class="fa fa-trash fa-fw"></i> Hapus</button></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['jumlah']; ?></td>
						<td align="right"><?php echo number_format($row['harga'], 2); ?></td>
						<td><button type="button" class="btn btn-warning btn-sm minus_qty2" value="<?php echo $row['productid']; ?>"><i class="fa fa-minus fa-fw"></i></button>
							<button type="button" class="btn btn-primary btn-sm add_qty2" value="<?php echo $row['productid']; ?>"><i class="fa fa-plus fa-fw"></i></button>
							<?php echo $row['cartjumlah']; ?>
						</td>
						<td align="right"><strong><span class="subt">
									<?php
									$subtotal = $row['cartjumlah'] * $row['harga'];
									echo number_format($subtotal, 2);
									$total += $subtotal;
									?>
								</span></strong></td>
					</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="5"><span class="pull-right"><strong>Total Keseluruhan</strong></span></td>
					<td align="right"><strong><span id="total"><?php echo number_format($total, 2); ?></span><strong></td>
				</tr>
			</form>
		</tbody>
	</table>
<?php
}


?>