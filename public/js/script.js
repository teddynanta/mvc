$(function () {

    $('.tambah').on('click', function () {
        $('#modalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#univ').val('');
        $('#jurusan').val('');
    })

    $('.ubah').on('click', function () {
        $('#modalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/mvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/mvc/public/mahasiswa/getUbah',
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#univ').val(data.univ);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        })
    })
})