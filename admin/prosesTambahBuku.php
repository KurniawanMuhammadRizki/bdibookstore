<?php

    include"../config/config.php";

    $id_buku   = $_POST['id_buku'];
    $kategori  = $_POST['kategori']; 
    $nama_buku  = $_POST['nama_buku'];
    $harga  = $_POST['harga']; 
    $stok = $_POST['stok'];
    $penerbit = $_POST['penerbit'];

    $query = "insert into buku(id_buku,kategori, nama_buku, harga, stok, penerbit)
    values('$id_buku','$kategori', '$nama_buku', '$harga', '$stok', '$penerbit')";

    //Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

  //Kondisi apakah berhasil atau tidak
    if ($hasil) {
      
      header('location: ../admin/admin4.php');
      exit;
    }
  else {
  
      header('location: ../GAGAL');
      exit;
  }  

?>
