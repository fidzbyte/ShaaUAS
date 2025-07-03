<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= isset($rekammedik) ? 'Edit' : 'Tambah' ?> Rekam Medik</h1>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="<?= isset($rekammedik) ? base_url('rekammedik/update/'.$rekammedik->id) : base_url('rekammedik/store') ?>">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= isset($rekammedik) ? $rekammedik->tanggal : date('Y-m-d') ?>" required>
                </div>
                <div class="form-group">
                    <label>Pasien</label>
                    <select name="norm" class="form-control" required>
                        <option value="">Pilih Pasien</option>
                        <?php foreach($pasien_list as $p): ?>
                        <option value="<?= $p->norm ?>" <?= isset($rekammedik) && $rekammedik->norm == $p->norm ? 'selected' : '' ?>>
                            <?= $p->norm ?> - <?= $p->nama ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Dokter</label>
                    <select name="id_dokter" class="form-control" required>
                        <option value="">Pilih Dokter</option>
                        <?php foreach($dokter_list as $d): ?>
                        <option value="<?= $d->id ?>" <?= isset($rekammedik) && $rekammedik->id_dokter == $d->id ? 'selected' : '' ?>>
                            <?= $d->nama ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tindakan</label>
                    <select name="id_tindakan" class="form-control" required>
                        <option value="">Pilih Tindakan</option>
                        <?php foreach($tindakan_list as $t): ?>
                        <option value="<?= $t->id ?>" <?= isset($rekammedik) && $rekammedik->id_tindakan == $t->id ? 'selected' : '' ?>>
                            <?= $t->nama ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Visum</label>
                    <textarea name="visum" class="form-control"><?= isset($rekammedik) ? $rekammedik->visum : '' ?></textarea>
                </div>
                <div class="form-group">
                    <label>Detail Tindakan</label>
                    <textarea name="tindakan" class="form-control"><?= isset($rekammedik) ? $rekammedik->tindakan : '' ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('rekammedik') ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>