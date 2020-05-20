<div class="container mt-3">
    <h3>Daftar Mahasiswa</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Universitas</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php foreach ($data['mhs'] as $mhs) :  ?>
            <tbody>
                <tr>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['univ']; ?></td>
                    <td><?= $mhs['jurusan']; ?></td>
                    <td><span class="btn-sm btn-primary">View</span></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>