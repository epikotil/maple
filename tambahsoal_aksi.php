<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$pertanyaan = $_POST['pertanyaan'];
$pila = $_POST['pilihan_a'];
$pilb = $_POST['pilihan_b'];
$pilc = $_POST['pilihan_c'];
$pild = $_POST['pilihan_d'];
$jawaban = $_POST['jawaban'];


// menginput data ke database
$hasil = mysqli_query($koneksi, ("insert into tabel_soal values('', '$pertanyaan','$pila','$pilb','$pilc','$pild','$jawaban') "));
// $hasil = mysqli_query($koneksi, "update tabel_soal set id_soal='$idse', 'pertanyaan='$pertanyaan', pilihan_a='$pila', pilihan_b='$pilb', pilihan_c='$pilc', pilihan_d='$pild', jawaban='$jawaban' where id_soal='$idse' ");
if ($hasil) {
    header("location:lihatsoal.php?pesan=berhasil");
} else {
    header("location:lihatsoal.php?pesan=gagal");
}