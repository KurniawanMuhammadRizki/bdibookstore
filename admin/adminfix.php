<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LOGO-BDI-1.png">
  <link rel="icon" type="image/png" href="../assets/img/LOGO-BDI-1.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    BDIBOOKSTORE
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <link href="assets/css/modal.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <!-- <a href="#" class="simple-text logo-mini">
          
        </a> -->
        <a href="dashboardAdmin" class="simple-text logo-normal">
          Dashboard Admin
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active" >
            <a href="./dataDiklat.php">
              <i class="now-ui-icons design_app"></i>
              <p>Data</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg   bg-primary  ">
        <div class="container-fluid">
          <div class="navbar-wrapper text-white">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <h5>Selamat Datang Admin!</h5>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <!-- <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profil</a>
                  <a class="dropdown-item" href="../controller/logout.php">Log Out</a>
                </div>
              </li>
            </ul>
          </div> -->
        </div>
      </nav>
      <!-- End Navbar -->

      <!-- <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div> -->
      <br><br><br>
      <div class="content">

        <div class="row">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title text-center text-primary "><b>Data BDIBOOKSTORE</b></h4>
              </div>
              <div class="card-body">
                <!-- <a class="btn btn-primary btn-xs" href="../controller/tambahDiklat.php"><i class="mr-1 fa fa-input"></i>Tambah Data</a> -->
                <!-- <button class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah Data</button> -->
                <h4 class="text-center text-primary">Data Buku</h4>
                <button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Tambah Data</button>
                    <div id="id01" class="modal">
                      <form class="modal-content animate" action="prosesTambahBuku.php" method="post">
                        <div class="container">
                          <label for="id_buku"><b>ID Buku</b></label>
                          <input class="form-control" type="text" placeholder="Maasukkan ID Buku" name="id_buku" required>
                          <label for="kategori"><b>Kategori</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Maasukkan Kategori" name="kategori" required>
                          <label for="nama_buku"><b>Nama Buku</b></label>
                          <input class="form-group mt-1" type="text" placeholder="Maasukkan Nama Buku" name="nama_buku" required>
                          <label for="harga"><b>Harga </b></label>
                          <input class="form-control mt-1" type="text" placeholder="Maasukkan harga Buku" name="harga" required>
                          <label for="stok"><b>Stok</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Maasukkan Stok Buku" name="stok" required>
                          <label for="penerbit"><b>Penerbit </b></label>
                          <input class="form-control mt-1" type="text" placeholder="Maasukkan Penerbit Buku" name="penerbit" required>
                          <button type="submit" name="kirim" value="kirim">Tambah</button>
                          <button type="button" onclick="document.getElementById('id01').style.display='none'" >Batalkan</button>
                        </div>
                      </form>
                    </div>
                <div class="table-responsive">
                <!-- <form class=" m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form> -->
                  <table class="table table-hover">
                  <thead class="text-primary">
                    <tr>
                        <th>No</th>
                        <th>ID Buku</th>
                        <th>Kategori</th>
                        <th>Nama Buku</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Penerbit</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                      <?php
        include('../config/config.php');
        $query = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY nama_buku asc") or die(mysqli_error($koneksi)); if (mysqli_num_rows($query) == 0) {echo '<tr><td colspan="6">Tidak ada data!</td></tr>';} 
        else {
          $no = 1;
          while ($data = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>' . $no . '</td>';
            echo '<td>' . $data['id_buku'] . '</td>';
            echo '<td>' . $data['kategori'] . '</td>';
            echo '<td>' . $data['nama_buku'] . '</td>';
            echo '<td>' . $data['harga'] . '</td>';
            echo '<td>' . $data['stok'] . '</td>';
            echo '<td>' . $data['penerbit'] . '</td>';
            
            ?>
            <td>
              <!-- <a class="btn btn-warning btn-xs" data-target="#modal-edit<?= $data['id']; ?>"><i class="mr-1 fa fa-edit"></i>Editss</a> /  -->
              <a href="#" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>">Edit</a> /
              <a class="btn btn-danger btn-xs" href="../admin/prosesHapus.php?id=' . $data['id'] . '" onclick="return confirm(\'Apakah Anda Yakin?\')"><i class="mr-1 fa fa-trash"></i>Hapus</a>
            </td>';
            <div class="modal fade" id="myModal<?php echo $data['id']; ?>" role="dialog">
              <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Mahasiswa</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="prosesEditBuku.php" method="post">
                        <?php
                        include('../config/config.php');
                        $id = $data['id']; 
                        $query_edit = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                          <label>ID Buku</label>
                          <input type="text" name="id_buku" class="form-control" value="<?php echo $row['id_buku']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Kategori</label>
                          <input type="text" name="kategori" class="form-control" value="<?php echo $row['kategori']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Nama Buku</label>
                          <input type="text" name="nama_buku" class="form-control" value="<?php echo $row['nama_buku']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Harga</label>
                          <input type="text" name="harga" class="form-control" value="<?php echo $row['harga']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Stok</label>
                          <input type="text" name="stok" class="form-control" value="<?php echo $row['stok']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Penerbit</label>
                          <input type="text" name="penerbit" class="form-control" value="<?php echo $row['penerbit']; ?>">      
                        </div>
                        <div class="modal-footer">  
                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        }
                        ?>        
                      </form>
                  </div>
                </div>
              </div>
            </div>
            <?php
              echo '</tr>';
            $no++;
          }
        }   ?>
                    </tbody>
                  </table>
                </div>
              </div>
                    
              <h4 class="text-center text-primary">Data Penerbit</h4>
              <button class="btn btn-primary" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Tambah Data</button>
              <div id="id02" class="modal">
                      <form class="modal-content animate" action="prosesTambahPenerbit.php" method="post">
                        <div class="container">
                          <label for="id_penerbit"><b>ID Penerbit</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Maasukkan ID Penerbit" name="id_penerbit" required>
                          <label for="nama"><b>Nama</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Maasukkan Nama" name="nama" required>
                          <label for="alamat"><b>Alamat</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Maasukkan Alamat" name="alamat" required>
                          <label for="kota"><b>Kota </b></label>
                          <input class="form-control mt-1" type="text" placeholder="Maasukkan Kota" name="kota" required>
                          <label for="telepon"><b>Telepon</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Maasukkan No Telepon" name="telepon" required>                          
                          <button type="submit" name="kirim" value="kirim">Tambah</button>
                          <button type="button" onclick="document.getElementById('id02').style.display='none'" >Batalkan</button>
                        </div>
                      </form>
                    </div>
              <table class="table table-hover">
                  <thead class="text-primary">
                    <tr>
                        <th>No</th>
                        <th>ID Penerbit</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                      <?php
        include('../config/config.php');
        $query = mysqli_query($koneksi, "SELECT * FROM penerbit ORDER BY nama asc") or die(mysqli_error($koneksi)); if (mysqli_num_rows($query) == 0) {echo '<tr><td colspan="6">Tidak ada data!</td></tr>';} 
        else {
          $no = 1;
          while ($data = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>' . $no . '</td>';
            echo '<td>' . $data['id_penerbit'] . '</td>';
            echo '<td>' . $data['nama'] . '</td>';
            echo '<td>' . $data['alamat'] . '</td>';
            echo '<td>' . $data['kota'] . '</td>';
            echo '<td>' . $data['telepon'] . '</td>';
            echo '<td><a class="btn btn-warning btn-xs" href="../admin/editDiklat.php?id=' . $data['id'] . '"><i class="mr-1 fa fa-edit"></i>Edit</a> / <a class="btn btn-danger btn-xs" href="../admin/prosesHapusPenerbit.php?id=' . $data['id'] . '" onclick="return confirm(\'Apakah Anda Yakin?\')"><i class="mr-1 fa fa-trash"></i>Hapus</a></td>';
            echo '</tr>';
            $no++;
          }
        }   ?>
                    </tbody>
                  </table>
            </div>/
            
      </div>
      
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="#">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Coded by <a href="#" target="_blank">Kurniawan Muhammad Rizki</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>

</html>