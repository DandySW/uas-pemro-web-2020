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
						<h1 class="page-header">List User
							<span class="pull-right">
								<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus-circle"></i> Tambah User</button>
							</span>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
							<thead>
								<tr>
									<th>ID User</th>
									<th>Nama</th>
									<th>Username</th>
									<th>Password</th>
									<th>Akses</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$cq = mysqli_query($conn, "SELECT u.*,r.nama as nama_role FROM user AS u INNER JOIN role AS r ON u.roleid=r.roleid");
								while ($cqrow = mysqli_fetch_array($cq)) {
								?>
									<tr>
										<td><?php echo $cqrow['userid']; ?></td>
										<td><?php echo $cqrow['nama']; ?></td>
										<td><?php echo $cqrow['username']; ?></td>
										<td>*******</td>
										<td><?php echo $cqrow['nama_role']; ?></td>
										<td>
											<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit_user<?php echo $cqrow['userid']; ?>"><i class="fa fa-edit"></i> Edit</button>
											<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_user<?php echo $cqrow['userid']; ?>"><i class="fa fa-trash"></i> Delete</button>
											<?php include('user_button.php'); ?>
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