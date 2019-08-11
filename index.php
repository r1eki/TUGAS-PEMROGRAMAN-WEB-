<?php require ('def.php');?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title><?php echo title;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="css/roboto.css" rel="stylesheet">
    <link href="modalku.css" rel="stylesheet">
  </head>
  <body class="bg-white" style="min-height: 1000px">
     <?php include "menu.php" ;?>
    <div class="p-fixed-top">
      
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/img1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/img1.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/img1.jpg" alt="Third slide">
        </div>
      </div>
    </div>
    <div class="jumbotron bg-white border-bottom">
        <div class="container text-center">
          <h4 class="display-4">Selamat Datang</h4>
          <p>Website is a trusted web solutions provider with over 10 years' experience in delivering a full spectrum of web development services to clients across the globe. Here you can find a large virtual library of high standard commercial PHP scripts, software solutions with individual industry specification, as well as a whole bunch of free web tools and other webmaster resources.</p>
          <a class="btn btn-primary btn-gradient" href="#" role="button">Tentang Kami</a>
          <a class="btn btn-danger btn-gradient" href="#" role="button">Kontak Kami</a>
        </div>
      </div>
    
      <div class="bg-white jumbotron border-bottom">
        <div class=" container text-center">
          <h4 class="display-4">Portofolio Kami</h4>
          <p>Website is a trusted web solutions provider with over 10 years' experience in delivering a full spectrum of web development services to clients across the globe. </p>

          <div class="row mx-0">
            <div class="col-md-3 col-6 p-2">
              <div class="card text-white">
                <img class="card-img" src="images/img-item-1.jpg" alt="Card image">
                <div class="card-img-overlay">
                  <h5 class="card-title">Container Feet 20</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                  <a href="#!" class="btn btn-primary btn-gradient">Lihat</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-6 p-2">
              <div class="card text-white">
                <img class="card-img" src="images/img-item-1.jpg" alt="Card image">
                <div class="card-img-overlay">
                  <h5 class="card-title">Container Feet 40</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                  <a href="#!" class="btn btn-primary btn-gradient">Lihat</a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 col-6 p-2">
              <div class="card text-white">
                <img class="card-img" src="images/img-item-1.jpg" alt="Card image">
                <div class="card-img-overlay">
                  <h5 class="card-title">Container Feet 60</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                  <a href="#!" class="btn btn-primary btn-gradient">Lihat</a>
                </div>
              </div>
            </div>
          </div>
        </div>          
      </div> 
    
      <div class="jumbotron bg-white border-bottom">
        <div class="container text-center">
          <h4 class="display-4">Perusahaan Kami</h4>
          <p>Bergerak di pelayanan pengiriman container lokal maupun luar negeri baik dalam jalur udara maupun jalur laut</p>

          <div class="row mx-0">
            <div class="col-md-2 col-6 p-2">
              <div class="card card-fa text-center">
              <div class="card-body">
              <span class="fa fa-book"></span>
              </div>
              <div class="card-footer">
              <h5>Pendaftaran</h5>
              </div>
              </div>
            </div>
            <div class="col-md-2 col-6 p-2">
              <div class="card card-fa text-center">
              <div class="card-body">
              <span class="fa fa-list"></span>
              </div>
              <div class="card-footer">
              <h5>Pengecekan</h5>
              </div>
              </div>
            </div>
            
            <div class="col-md-2 col-6 p-2">
              <div class="card card-fa text-center">
              <div class="card-body">
              <span class="fa fa-building"></span>
              </div>
              <div class="card-footer">
              <h5>Pengesahan Bea Pemasukan</h5>
              </div>
              </div>
            </div>
            <div class="col-md-2 col-6 p-2">
              <div class="card card-fa text-center">
              <div class="card-body">
              <span class="fa fa-truck"></span>
              </div>
              <div class="card-footer">
              <h5>Pengeluaran Barang dari CTPS</h5>
              </div>
              </div>
            </div>
            <div class="col-md-2 col-6 p-2">
              <div class="card card-fa text-center">
              <div class="card-body">
              <span class="fa fa-road"></span>
              </div>
              <div class="card-footer">
              <h5>Pengiriman Barang</h5>
              </div>
              </div>
            </div>
             <div class="col-md-2 col-6 p-2">
              <div class="card card-fa text-center">
              <div class="card-body">
              <span class="fa fa-check"></span>
              </div>
              <div class="card-footer">
              <h5>Selesai</h5>
              </div>
              </div>
            </div>
          </div>
        </div>          
      </div>  

    <div class="jumbotron bg-white border-bottom">
        <div class="container text-center">
          <h4 class="display-4">Testimoni</h4>
          <p>Website is a trusted web solutions provider with over 10 years' experience in delivering a full spectrum of web development services to clients across the globe. Here you can find a large virtual library of high standard commercial PHP scripts, software solutions with individual industry specification, as well as a whole bunch of free web tools and other webmaster resources.</p>
           <div class="row mx-0">
            <div class="col-md-3 col-6 p-2">
              <div class="card">
                <img class="card-img-top" src="images/img-item-1.jpg" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title">Mr. John Doe</h5>
                  <p class="card-text"><small class="text-muted">Unkown Corporation</small></p>
                  <p class="card-text">"This is a wider card with supporting text below as a ."</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6 p-2">
              <div class="card">
                <img class="card-img-top" src="images/img-item-1.jpg" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title">Mr. John Doe</h5>
                  <p class="card-text"><small class="text-muted">Unkown Corporation</small></p>
                  <p class="card-text">"This is a wider card with supporting text below as a ."</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6 p-2">
              <div class="card">
                <img class="card-img-top" src="images/img-item-1.jpg" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title">Mr. John Doe</h5>
                  <p class="card-text"><small class="text-muted">Unkown Corporation</small></p>
                  <p class="card-text">"This is a wider card with supporting text below as a ."</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6 p-2">
              <div class="card">
                <img class="card-img-top" src="images/img-item-1.jpg" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title">Mr. John Doe</h5>
                  <p class="card-text"><small class="text-muted">Unkown Corporation</small></p>
                  <p class="card-text">"This is a wider card with supporting text below as a ."</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>    

   <?php include "footer.php";?>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>  
    <script src="js/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script type="text/javascript">
                  $(document).ready(function(){
                    $(window).scroll(function (event) {
                        var scroll = $(window).scrollTop();
                        if (scroll>60){
                          $('#header').removeClass('navbar-a');
                        } else {
                          $('#header').addClass('navbar-a');
                        }
                    });


                    })
    </script>
    </body>
</html>


