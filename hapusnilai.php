<?php
include 'koneksi.php';
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $hapus = mysqli_query($koneksi, ("DELETE FROM tabel_nilai WHERE id_nilai='$id'"));
    if ($hapus) {
        header("location:hasilujian.php?pesan=hapus");
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}