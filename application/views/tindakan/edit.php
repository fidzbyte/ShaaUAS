<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= isset($tindakan) ? 'Edit' : 'Tambah' ?> Tindakan</h1>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="<?= isset($tindakan) ? base_url('tindakan/update/'.$tindakan->id) : base_url('tindakan/store') ?>">
                <div class="form-group">
                    <label>Nama Tindakan</label>
                    <input type="text" name="nama" class="form-control" value="<?= isset($tindakan) ? $tindakan->nama : '' ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('tindakan') ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>