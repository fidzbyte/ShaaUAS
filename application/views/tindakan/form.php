<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo isset($tindakan) ? 'Edit' : 'Tambah'; ?> Tindakan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form Tindakan
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo form_open(isset($tindakan) ? 'tindakan/update/'.$tindakan->id : 'tindakan/store'); ?>
                                <div class="form-group">
                                    <label>Nama Tindakan</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo isset($tindakan) ? $tindakan->nama : ''; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo site_url('tindakan'); ?>" class="btn btn-default">Kembali</a>
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