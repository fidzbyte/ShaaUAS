<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo isset($dokter) ? 'Edit' : 'Tambah'; ?> Dokter</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form Dokter
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo form_open(isset($dokter) ? 'dokter/update/'.$dokter->id : 'dokter/store'); ?>
                                <div class="form-group">
                                    <label>Nama Dokter</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo isset($dokter) ? $dokter->nama : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input type="text" name="notelp" class="form-control" value="<?php echo isset($dokter) ? $dokter->notelp : ''; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo site_url('dokter'); ?>" class="btn btn-default">Kembali</a>
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