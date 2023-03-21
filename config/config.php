<?php
$koneksi = mysqli_connect('localhost', 'root', 'pelerr123', 'data');
if ($koneksi) { } else {
  echo 'tidak terkoneksi';
}
