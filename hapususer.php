<?php 
include 'koneksi.php';
if(isset($_GET['id']) ){

	$id = $_GET['id'];
	$hapus = mysqli_query($koneksi, ("DELETE FROM tabel_user WHERE id_user='$id'"));
	if( $hapus ){
		header("location:datauser.php?pesan=hapus");
	} else {
		die("gagal menghapus...");
	}
} else{
	die("akses dilarang...");
}