<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Rekam Medik</h1>
    
    <a href="<?= base_url('rekammedik/create') ?>" class="btn btn-primary mb-3">Tambah Rekam Medik</a>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>No. RM</th>
                            <th>Nama Pasien</th>
                            <th>Dokter</th>
                            <th>Tindakan</th>
                            <th>Visum</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rekammedik as $rm): ?>
                        <tr>
                            <td><?= $rm->tanggal ?></td>
                            <td><?= $rm->norm ?></td>
                            <td><?= $rm->nama_pasien ?></td>
                            <td><?= $rm->nama_dokter ?></td>
                            <td><?= $rm->nama_tindakan ?></td>
                            <td><?= $rm->visum ?></td>
                            <td>
                                <a href="<?= base_url('rekammedik/edit/'.$rm->id) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('rekammedik/delete/'.$rm->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>