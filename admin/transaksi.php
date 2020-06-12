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
						<h1 class="page-header">Laporan Transaksi</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<table width="100%" class="table table-striped table-bordered table-hover" id="salesTable">
							<thead>
								<tr>
									<th class="hidden"></th>
									<th>Tanggal Transaksi</th>
									<th>Kasir</th>
									<th>Total Transaksi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sq = mysqli_query($conn, "SELECT * FROM transaksi left join user ON user.userid=transaksi.userid order by transaksi_date desc");
								while ($sqrow = mysqli_fetch_array($sq)) {
								?>
									<tr>
										<td class="hidden"></td>
										<td><?php echo date('d F Y h:i A', strtotime($sqrow['transaksi_date'])); ?></td>
										<td><?php echo $sqrow['username']; ?> (<?= $sqrow['nama'] ?>)</td>
										<td align="left">Rp <?php echo number_format($sqrow['transaksi_total'], 2, ',', '.'); ?></td>
										<td>
											<a href="#detail<?php echo $sqrow['transaksi_id']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-fullscreen"></span> Tampilkan secara detail</a>
											<?php include('transaksi_detail.php'); ?>
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