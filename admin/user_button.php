<!-- Hapus User -->
<div class="modal fade" id="delete_user<?php echo $cqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?php
                    $a = mysqli_query($conn, "SELECT u.*,r.nama as nama_role FROM user AS u INNER JOIN role AS r ON u.roleid=r.roleid");
                    $b = mysqli_fetch_array($a);
                    ?>
                    <h5>
                        <center>Apakah anda yakin akan menghapus akun <strong><?php echo ucwords($cqrow['nama']); ?></strong> dari sistem?</center>
                    </h5>
                    <form role="form" method="POST" action="delete_user.php<?php echo '?id=' . $cqrow['userid']; ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Hapus User Selesai-->

<!-- Ubah User -->
<div class="modal fade" id="edit_user<?php echo $cqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?php

                    ?>
                    <div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_user.php<?php echo '?id=' . $cqrow['userid'] ?>">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Nama:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($cqrow['nama']); ?>" class="form-control" name="name">
                        </div>

                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Username:</span>
                            <input type="text" style="width:400px;" value="<?php echo $cqrow['username'] ?>" class="form-control" name="username">
                        </div>

                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Password:</span>
                            <input type="password" style="width:400px;" value="<?php echo $cqrow['password'] ?>" class="form-control" name="password">
                        </div>
                        <div style="height:10px;"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ubah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /Ubah User Selesai -->