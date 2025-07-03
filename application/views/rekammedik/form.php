<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo isset($rekammedik) ? 'Edit' : 'Tambah'; ?> Rekam Medik</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form Rekam Medik
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo form_open(isset($rekammedik) ? 'rekammedik/update/'.$rekammedik->id : 'rekammedik/store'); ?>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control datepicker" value="<?php echo isset($rekammedik) ? $rekammedik->tanggal : date('Y-m-d'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Pasien</label>
                                    <select name="norm" class="form-control" required>
                                        <option value="">Pilih Pasien</option>
                                        <?php foreach($pasien_list as $pasien): ?>
                                        <option value="<?php echo $pasien->norm; ?>" <?php echo (isset($rekammedik) && $rekammedik->norm == $pasien->norm) ? 'selected' : ''; ?>>
                                            <?php echo $pasien->norm . ' - ' . $pasien->nama; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Dokter</label>
                                    <select name="id_dokter" class="form-control" required>
                                        <option value="">Pilih Dokter</option>
                                        <?php foreach($dokter_list as $dokter): ?>
                                        <option value="<?php echo $dokter->id; ?>" <?php echo (isset($rekammedik) && $rekammedik->id_dokter == $dokter->id) ? 'selected' : ''; ?>>
                                            <?php echo $dokter->nama; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tindakan</label>
                                    <select name="id_tindakan" class="form-control" required>
                                        <option value="">Pilih Tindakan</option>
                                        <?php foreach($tindakan_list as $tindakan): ?>
                                        <option value="<?php echo $tindakan->id; ?>" <?php echo (isset($rekammedik) && $rekammedik->id_tindakan == $tindakan->id) ? 'selected' : ''; ?>>
                                            <?php echo $tindakan->nama; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Visum</label>
                                    <textarea name="visum" class="form-control"><?php echo isset($rekammedik) ? $rekammedik->visum : ''; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tindakan (Detail)</label>
                                    <textarea name="tindakan" class="form-control"><?php echo isset($rekammedik) ? $rekammedik->tindakan : ''; ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo site_url('rekammedik'); ?>" class="btn btn-default">Kembali</a>
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