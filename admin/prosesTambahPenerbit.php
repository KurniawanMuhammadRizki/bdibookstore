<?php

    include"../config/config.php";

    $id_penerbit   = $_POST['id_penerbit'];
    $nama  = $_POST['nama']; 
    $alamat  = $_POST['alamat'];
    $kota  = $_POST['kota']; 
    $telepon = $_POST['telepon'];
    

    $query = "insert into penerbit(id_penerbit, nama, alamat, kota, telepon)
    values('$id_penerbit', '$nama', '$alamat', '$kota', '$telepon')";

    //Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

  //Kondisi apakah berhasil atau tidak
    if ($hasil) {
      header('location: ../admin/admin.php');
      exit;
    }
  else {
  
      header('location: ../GAGAL');
      exit;
  }  

?>
