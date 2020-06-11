<!-- Tambah Barang -->
<div class="modal fade" id="add_barang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Tambah Barang Baru</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="add_barang.php" enctype="multipart/form-data">
                        <div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Nama:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Harga:</span>
                                <input type="text" style="width:400px;" class="form-control" name="price" required>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Jumlah:</span>
                                <input type="text" style="width:400px;" class="form-control" name="qty">
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Foto:</span>
                                <input type="file" style="width:400px;" class="form-control" name="image">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.Tambah Barang Selesai -->

<!-- Tambah User -->
<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Tambah User baru</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="add_user.php" enctype="multipart/form-data">
                        <div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Nama:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                            </div>

                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Username:</span>
                                <input type="text" style="width:400px;" class="form-control" name="username" required>
                            </div>

                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Password:</span>
                                <input type="password" style="width:400px;" class="form-control" name="password" required>
                            </div>

                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Akses:</span>
                                <select name='access' style="width:400px;" class="form-control">
                                    <option value='1'>Admin</option>
                                    <option value='2'>Kasir</option>
                                </select>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
<!-- /Tambah User Selesai -->