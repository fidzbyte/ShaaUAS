<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Tindakan</h1>
    
    <a href="<?= base_url('tindakan/create') ?>" class="btn btn-primary mb-3">Tambah Tindakan</a>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Tindakan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tindakan as $t): ?>
                        <tr>
                            <td><?= $t->id ?></td>
                            <td><?= $t->nama ?></td>
                            <td>
                                <a href="<?= base_url('tindakan/edit/'.$t->id) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('tindakan/delete/'.$t->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>