<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        
          <div class="col-lg-12">
            <div class="p-5">
             
              <form class="user" action="halaman/produk/send_produk.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
					Masukkan nama produk
                    <input type="text" class="form-control form-control-user" name="nama" id="exampleFirstName" placeholder="Masukkan nama produk" required>
                  </div>
                </div>
				Masukkan kategori
                <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" name="kategori" id="exampleInputEmail" placeholder="Masukkan kategori" required>
                </div>
				</div>
				Masukkan isi produk
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="isi" id="exampleInputPassword" placeholder="Masukkan isi produk" required>
                  </div>
                  
                </div>
				Unggah gambar produk
				<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="file" name="foto" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan gambar produk" required>
                  </div></div><br>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Simpan Produk
                </button>
  </div>