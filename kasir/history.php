<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>
	<?php include('navbar.php'); ?>
	<div class="container">
		<?php include('cart_search_field.php'); ?>
		<div style="height: 50px;"></div>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Riwayat Transaksi</h1>
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<table width="100%" class="table table-striped table-bordered table-hover" id="historyTable">
					<thead>
						<tr>
							<th class="hidden"></th>
							<th align="center">Nomor Transaksi</th>
							<th align="center">Tanggal Transaksi</th>
							<th align="center">Total Transaksi</th>
							<th align="center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$h = mysqli_query($conn, "SELECT * FROM transaksi WHERE userid='" . $_SESSION['id'] . "' order by transaksi_date desc");
						while ($hrow = mysqli_fetch_array($h)) {
						?>
							<tr>
								<td class="hidden"></td>
								<td align="center"><?php echo ($hrow['nomor_transaksi']); ?></td>
								<td align="center"><?php echo date('d F Y h:i A', strtotime($hrow['transaksi_date'])); ?></td>
								<td align="right">Rp <?php echo number_format($hrow['transaksi_total'], 2, ',', '.'); ?></td>
								<td>
									<a href="#detail<?php echo $hrow['transaksi_id']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-fullscreen"></span> Tampilkan secara detail</a>
									<?php include('modal_hist.php'); ?>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>


	</div>
	<?php include('script.php'); ?>
	<?php include('modal.php'); ?>
	<script src="custom.js"></script>
	<script>
		$(document).ready(function() {
			$('#history').addClass('active');

			$('#historyTable').DataTable({
				"bLengthChange": true,
				"bInfo": true,
				"bPaginate": true,
				"bFilter": true,
				"bSort": true,
				"pageLength": 7
			});
		});
	</script>
</body>

</html>