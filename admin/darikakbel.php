<form class="modal-content animate" action="prosesTambahBuku.php" method="post">
                        <div class="container">
                          <?php
                          include('../config/config.php');
                          $id = $data['id']; 
                          $query_edit = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
                          while ($row = mysqli_fetch_array($query_edit)) {  
                          ?>
                          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                          <label for="id_buku"><b>ID Buku</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Masukkan ID Buku" name="id_buku" required value="<?php echo $row['id_buku']; ?>">
                          <label for="kategori"><b>Kategori</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Masukkan Kategori" name="kategori" required value="<?php echo $row['kategori']; ?>">
                          <label for="nama_buku"><b>Nama Buku</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Masukkan Nama Buku" name="nama_buku" required value="<?php echo $row['nama_buku']; ?>">
                          <label for="harga"><b>Harga </b></label>
                          <input class="form-control mt-1" type="text" placeholder="Masukkan harga Buku" name="harga" required value="<?php echo $row['harga']; ?>">
                          <label for="stok"><b>Stok</b></label>
                          <input class="form-control mt-1" type="text" placeholder="Masukkan Stok Buku" name="stok" required value="<?php echo $row['stok']; ?>">
                          <label for="penerbit"><b>Penerbit </b></label>
                          <input class="form-control mt-1" type="text" placeholder="Masukkan Penerbit Buku" name="penerbit" required value="<?php echo $row['penerbit']; ?>">
                          <div class="modal-footer">  
                            <button type="submit" name="" class="btn btn-success">Update</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          </div>
                        </div>
                      </form>