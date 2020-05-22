<div class="container mt-5">
    <div class="row">
        <div class="col-4">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) :  ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>/" class="badge badge-primary">View</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php var_dump($data);
    var_dump($mhs); ?>
</div>
<!-- <//?php foreach ($data['mhs'] as $mhs) :  ?>
    <tbody>
        <tr>
            <td><//?= $mhs['nama']; ?></td>
            <td><//?= $mhs['univ']; ?></td>
            <td><//?= $mhs['jurusan']; ?></td>
            <td><span class="btn-sm btn-primary">View</span></td>
        </tr>
    </tbody>
<//?php endforeach; ?> -->