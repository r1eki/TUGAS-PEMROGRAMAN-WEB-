<?php 
require ('def.php');
require ('config.php');
?>
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
    <style type="text/css">

      </style>
  </head>
  <body class="bg-white">
    <?php include "menu.php" ;?>
    <div class="p-fixed-top">
    </div>  
    <div class=" jumbotron bg-white container py-4 mb-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active" aria-current="page">Produk Perusahaan</li>
      </ol>
    </nav>
	
    <div class="jumbotron bg-white border-bottom">
        <div class="container text-center">
          <h4 class="display-4">Produk</h4>
          <p>Website is a trusted web solutions provider with over 10 years' experience in delivering a full spectrum of web development services to clients across the globe. Here you can find a large virtual library of high standard commercial PHP scripts, software solutions with individual industry specification, as well as a whole bunch of free web tools and other webmaster resources.</p>
           <div class="row mx-0">
		   
			<?php
                           $query  = "SELECT * FROM produk ";
                            $tampil = mysqli_query($mysqli, $query);
							$no = 1;
                            while($row=mysqli_fetch_array($tampil)){?>
            <div class="col-md-3 col-6 p-2">
			
              <div class="card">
                <img class="card-img-top" src="user/halaman/produk/images/<?php echo $row['foto'];?>" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title"><?php echo $row['nama'];?></h5>
                  <p class="card-text"><small class="text-muted">Unkown Corporation</small></p>
                  <p class="card-text"><?php echo $row['isi'];?></p>
                  
                </div>
				
				
				
              </div>
			  </div>
							<?php } ?>
							
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


