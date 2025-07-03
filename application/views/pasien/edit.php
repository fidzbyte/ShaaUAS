<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= isset($pasien) ? 'Edit' : 'Tambah' ?> Pasien</h1>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="<?= isset($pasien) ? base_url('pasien/update/'.$pasien->norm) : base_url('pasien/store') ?>">
                <?php if(!isset($pasien)): ?>
                <div class="form-group">
                    <label>No. RM</label>
                    <input type="text" name="norm" class="form-control" required>
                </div>
                <?php endif; ?>
                <div class="form-group">
                    <label>Nama Pasien</label>
                    <input type="text" name="nama" class="form-control" value="<?= isset($pasien) ? $pasien->nama : '' ?>" required>
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="notelp" class="form-control" value="<?= isset($pasien) ? $pasien->notelp : '' ?>" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required><?= isset($pasien) ? $pasien->alamat : '' ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('pasien') ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>