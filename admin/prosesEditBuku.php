<?php
include '../config/config.php';

$id = $_POST['id'];
$id_buku   = $_POST['id_buku'];
$kategori  = $_POST['kategori']; 
$nama_buku  = $_POST['nama_buku'];
$harga  = $_POST['harga']; 
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

$query = mysqli_query($koneksi, "UPDATE buku SET id_buku='$id_buku', kategori='$kategori', nama_buku='$nama_buku', harga='$harga', stok='$stok', penerbit='$penerbit' WHERE id='$id' ");

	if ($query) 
		{
			$_SESSION['id'] = $query['id'];
			echo "
            <script>
                alert('Data Berhasil di Edit');
                document.location.href ='admin4.php';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal di Edit !');
		        	document.location.href ='admin4.php';
		        </script>";
		    }
?>