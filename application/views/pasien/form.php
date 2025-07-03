<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo isset($pasien) ? 'Edit' : 'Tambah'; ?> Pasien</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form Pasien
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo form_open(isset($pasien) ? 'pasien/update/'.$pasien->norm : 'pasien/store'); ?>
                                <?php if(!isset($pasien)): ?>
                                <div class="form-group">
                                    <label>No. RM</label>
                                    <input type="text" name="norm" class="form-control" value="<?php echo isset($pasien) ? $pasien->norm : ''; ?>" required>
                                </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>Nama Pasien</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo isset($pasien) ? $pasien->nama : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input type="text" name="notelp" class="form-control" value="<?php echo isset($pasien) ? $pasien->notelp : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" required><?php echo isset($pasien) ? $pasien->alamat : ''; ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo site_url('pasien'); ?>" class="btn btn-default">Kembali</a>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->