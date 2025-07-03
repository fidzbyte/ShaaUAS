<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= isset($dokter) ? 'Edit' : 'Tambah' ?> Dokter</h1>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= isset($dokter) ? base_url('dokter/update/'.$dokter->id) : base_url('dokter/store') ?>" method="post">
                <div class="form-group">
                    <label>Nama Dokter</label>
                    <input type="text" name="nama" class="form-control" value="<?= isset($dokter) ? $dokter->nama : '' ?>" required>
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="notelp" class="form-control" value="<?= isset($dokter) ? $dokter->notelp : '' ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('dokter') ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>