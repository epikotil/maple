<?php
include 'koneksi.php';
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $hapus = mysqli_query($koneksi, ("DELETE FROM tabel_soal WHERE id_soal='$id'"));
    if ($hapus) {
        header("location:lihatsoal.php?pesan=hapus");
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
