<!-- Full Details -->
<div class="modal fade" id="detail<?php echo $sqrow['transaksi_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Detail Transaksi</h4>
				</center>
			</div>
			<div class="modal-body">
				<?php
				$sales = mysqli_query($conn, "SELECT * FROM transaksi left join user ON user.userid=transaksi.userid where transaksi_id='" . $sqrow['transaksi_id'] . "'");
				$srow = mysqli_fetch_array($sales);
				?>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<span>Kasir Penjual: <strong><?php echo ucwords($srow['nama']); ?></strong></span>
							<span class="pull-right">Tanggal Transaksi: <strong><?php echo date("d F Y", strtotime($srow['transaksi_date'])); ?></strong></span>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-12">
							<table width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th align="center">Nama Barang</th>
										<th align="center">Harga</th>
										<th align="center">Jumlah</th>
										<th align="center">SubTotal</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$total = 0;
									$pd = mysqli_query($conn, "SELECT * FROM transaksi_detail LEFT JOIN product ON product.productid=transaksi_detail.productid where transaksi_id='" . $sqrow['transaksi_id'] . "'");
									while ($pdrow = mysqli_fetch_array($pd)) {
									?>
										<tr>
											<td align="left"><?php echo ucwords($pdrow['nama']); ?></td>
											<td align="right">Rp <?php echo number_format($pdrow['harga'], 2, ',', '.'); ?></td>
											<td align="center"><?php echo $pdrow['transaksi_jumlah']; ?></td>
											<td align="right">Rp
												<?php
												$subtotal = $pdrow['harga'] * $pdrow['transaksi_jumlah'];
												echo number_format($subtotal, 2);
												$total += $subtotal;
												?>
											</td>
										</tr>
									<?php
									}
									?>
									<tr>
										<td align="right" colspan="3"><strong>Total</strong></td>
										<td align="right"><strong>Rp <?php echo number_format($total, 2, ',', '.'); ?></strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>