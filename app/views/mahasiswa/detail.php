<div class="container mt-5">
    <h3>Detail Mahasiswa</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Universitas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $data['mhs']['nama']; ?></td>
                <td><?= $data['mhs']['univ']; ?></td>
                <td><?= $data['mhs']['jurusan']; ?></td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href='<?= BASEURL; ?>/mahasiswa/index'>BACK</a>
</div>