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
						<h1 class="page-header">Riwayat Barang</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<table width="100%" class="table table-striped table-bordered table-hover" id="invTable">
							<thead>
								<tr>
									<th class="hidden"></th>
									<th>Tanggal </th>
									<th>User</th>
									<th>Action</th>
									<th>Nama Barang</th>
									<th>Jumlah</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$iq = mysqli_query($conn, "SELECT h.*,u.username as username, p.nama as nama_barang FROM history AS h INNER JOIN user AS u ON h.userid=u.userid INNER JOIN product AS p ON h.productid=p.productid");
								while ($iqrow = mysqli_fetch_array($iq)) {
								?>
									<tr>
										<td class="hidden"></td>
										<td><?php echo date('M d, Y h:i A', strtotime($iqrow['history_date'])); ?></td>
										<td><?php echo $iqrow['username']; ?></td>
										<td><?php echo $iqrow['action']; ?></td>
										<td><?php echo $iqrow['nama_barang']; ?></td>
										<td><?php echo $iqrow['quantity']; ?></td>
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