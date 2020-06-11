<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>
	<div id="wrapper">
		<?php include('navbar.php'); ?>
		<div style="height:50px;"></div>
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">List Barang
							<span class="pull-right">
								<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_barang"><i class="fa fa-plus-circle"></i> Tambah Barang</button>
							</span>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<table width="100%" class="table table-striped table-bordered table-hover" id="prodTable">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama Barang</th>
									<th>Harga</th>
									<th>Jumlah</th>
									<th>Foto</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$pq = mysqli_query($conn, "SELECT * FROM product");
								while ($pqrow = mysqli_fetch_array($pq)) {
									$pid = $pqrow['productid'];
								?>
									<tr>
										<td><?php echo $pqrow['productid']; ?></td>
										<td><?php echo $pqrow['nama']; ?></td>
										<td><?php echo $pqrow['harga']; ?></td>
										<td><?php echo $pqrow['jumlah']; ?></td>
										<td><img src="../<?php if (empty($pqrow['foto'])) {
																echo "upload/noimage.jpg";
															} else {
																echo $pqrow['foto'];
															} ?>" height="30px" width="30px;"></td>
										<td>
											<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit_barang<?php echo $pid; ?>"><i class="fa fa-edit"></i> Ubah</button>
											<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_barang<?php echo $pid; ?>"><i class="fa fa-trash"></i> Hapus</button>
											<?php include('barang_button.php'); ?>
										</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('script.php'); ?>
	<?php include('modal.php'); ?>
	<?php include('add_modal.php'); ?>
	<script src="custom.js"></script>
</body>

</html>