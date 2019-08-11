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
    <style type="text/css">

      </style>
  </head>
  <body class="bg-white">
    <?php include "menu.php";?>
    <div class="p-fixed-top">
    </div>  
    <div class=" jumbotron bg-white container py-4 mb-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active" aria-current="page">Buku Tamu</li>
      </ol>
    </nav>
    <form action="send_book.php" method="POST">
  <div class="form-group">
     <div class="form-group">
    <label for="exampleInputPassword1">Your Name</label>
    <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="Your Name" required>
  </div>

    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

    <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  </div>
 

  <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
</form>
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


