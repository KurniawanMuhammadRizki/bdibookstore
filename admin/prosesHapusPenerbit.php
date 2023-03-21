<?php
//Include file koneksi ke database
include "../config/config.php";


$id = $_GET['id'];
 
//Query input menginput data kedalam tabel barang
  $query="DELETE FROM penerbit WHERE id=$id";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	
	header('location: ../admin/admin.php');
	exit;
  }
	else {

	header('location: ../gagal');
	exit;
	}

?>