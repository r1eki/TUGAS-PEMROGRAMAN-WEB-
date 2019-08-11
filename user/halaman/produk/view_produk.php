 <?php error_reporting(0);
 if ($_GET['act']==''){?>  
 <div class="content">
 <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Data Produk</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
            </div>
			
			 <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gambar Produk</th>
                      <th>Nama Produk</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>
                 
                  <tbody>
				  <?php
                           $query  = "SELECT * FROM produk ";
                            $tampil = mysqli_query($koneksi, $query);
							$no = 1;
                            while ($row=mysqli_fetch_array($tampil)){?>
                    <tr>
                      <td><?php echo $no++;?></td>
					  <td><img src="halaman/produk/images/<?php echo $row['foto'];?>" height="50"></td>
                      <td><?php echo $row['nama'];?></td>
                      <td><?php echo $row['isi'];?></td>
                      <td><a href="?page=produk&act=hapus&id=<?php echo $row['id'];?>" class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash"></i>
                  </a><span> <a href="#" class="btn btn-primary btn-circle btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                  </a></td>
                      
                    </tr>
							<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <?php } elseif ($_GET['act']=='hapus') {
mysqli_query($koneksi, "DELETE FROM produk WHERE id='$_GET[id]'");
 echo "<script language='javascript'>alert('Data Berhasil Dihapus !');
document.location='halaman.php?page=produk';
</script>";
}?>