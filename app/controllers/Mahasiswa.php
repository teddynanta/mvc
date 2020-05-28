<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMhs($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan!', 'success');
            echo "<script>document.location = ' " . BASEURL . "/mahasiswa/index';</script>";
            exit();
        } else {
            Flasher::setFlash('gagal', 'ditambahkan!', 'danger');
            echo "<script>document.location = ' " . BASEURL . "/mahasiswa/index';</script>";
            exit();
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus!', 'success');
            echo "<script>document.location = ' " . BASEURL . "/mahasiswa/index';</script>";
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus!', 'danger');
            echo "<script>document.location = ' " . BASEURL . "/mahasiswa/index';</script>";
            exit();
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMhs($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah!', 'success');
            echo "<script>document.location = ' " . BASEURL . "/mahasiswa/index';</script>";
            exit();
        } else {
            Flasher::setFlash('gagal', 'diubah!', 'danger');
            echo "<script>document.location = ' " . BASEURL . "/mahasiswa/index';</script>";
            exit();
        }
    }

    public function cari()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}
