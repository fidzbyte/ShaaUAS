<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>
    
    <a href="<?= base_url('pasien/create') ?>" class="btn btn-primary mb-3">Tambah Pasien</a>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No. RM</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pasien as $p): ?>
                        <tr>
                            <td><?= $p->norm ?></td>
                            <td><?= $p->nama ?></td>
                            <td><?= $p->notelp ?></td>
                            <td><?= $p->alamat ?></td>
                            <td>
                                <a href="<?= base_url('pasien/edit/'.$p->norm) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('pasien/delete/'.$p->norm) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>