 <?php error_reporting(0);
 if ($_GET['act']==''){?>  
<div class="container">
 <div class="content">
 <div class="container-fluid">

        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pesan Masuk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Pesan</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>
                 
                  <tbody>
				  <?php
                           $query  = "SELECT * FROM buku_tamu ";
                            $tampil = mysqli_query($koneksi, $query);
							$no = 1;
                            while ($row=mysqli_fetch_array($tampil)){?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row['nama'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['pesan'];?></td>
                      <td><a href="?page=bukutamu&act=hapus&id=<?php echo $row['id'];?>" class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash"></i>
                  </td>
                      
                    </tr>
							<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div></div>
      <?php } elseif ($_GET['act']=='hapus') {
mysqli_query($koneksi, "DELETE FROM buku_tamu WHERE id='$_GET[id]'");
 echo "<script language='javascript'>alert('Data Berhasil Dihapus !');
document.location='halaman.php?page=produk';
</script>";
}?>