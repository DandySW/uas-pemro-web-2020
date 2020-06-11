<!-- Hapus Barang -->
<div class="modal fade" id="delete_barang<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?php
                    $a = mysqli_query($conn, "SELECT * FROM product WHERE productid='$pid'");
                    $b = mysqli_fetch_array($a);
                    ?>
                    <h5>
                        <center>Apakah anda yakin akan menghapus <strong><?php echo $b['nama']; ?></strong> dari sistem?</center>
                    </h5>
                    <form role="form" method="POST" action="delete_barang.php<?php echo '?id=' . $pid; ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Ya</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Hapus Barang Selesai -->

<!-- Ubah Barang -->
<div class="modal fade" id="edit_barang<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Ubah Barang</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?php
                    $a = mysqli_query($conn, "SELECT * FROM product WHERE productid='$pid'");
                    $b = mysqli_fetch_array($a);
                    ?>
                    <div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_barang.php<?php echo '?id=' . $pid; ?>" enctype="multipart/form-data">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Nama:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['nama']); ?>" class="form-control" name="name">
                        </div>
                        <div style="height:10px;"></div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Harga:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['harga'] ?>" class="form-control" name="price">
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Jumlah:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['jumlah'] ?>" class="form-control" name="qty">
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Foto:</span>
                            <input type="file" style="width:400px;" class="form-control" name="image">
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
    <!-- /Ubah Barang Selesai-->