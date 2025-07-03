<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Dokter</h1>
    
    <a href="<?= base_url('dokter/create') ?>" class="btn btn-primary mb-3">Tambah Dokter</a>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dokter as $d): ?>
                        <tr>
                            <td><?= $d->id ?></td>
                            <td><?= $d->nama ?></td>
                            <td><?= $d->notelp ?></td>
                            <td>
                                <a href="<?= base_url('dokter/edit/'.$d->id) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('dokter/delete/'.$d->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>