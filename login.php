<?php require ('def.php');?>
<?php
session_start();
$message="";
$captcha = true;
if(count($_POST)>0 && isset($_POST["Captcha"]) && $_POST["Captcha"]!=$_SESSION["Captcha"]) {
$captcha = false;
$message = "Enter Correct Captcha Code";
}
$mysqli = new mysqli('localhost','root','bolodewe212','e-container');  
$ip = $_SERVER['REMOTE_ADDR'];
$result = $mysqli->query("SELECT count(ip_address) AS failed_login_attempt FROM failed_login WHERE ip_address = '$ip'  AND date BETWEEN DATE_SUB( NOW() , INTERVAL 1 DAY ) AND NOW()");
$row  = $result->fetch_assoc();
$failed_login_attempt = $row['failed_login_attempt'];
$result->free();


if(count($_POST)>0 && $captcha == true) {
  $result = $mysqli->query("SELECT * FROM users WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
  $row  = $result->fetch_assoc();
  $result->free();
  if(is_array($row)) {
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["user_name"] = $row["user_name"];
    $mysqli->query("DELETE FROM failed_login WHERE ip_address = '$ip'");
  } else {
    $message = "Invalid Username or Password!";
    if ($failed_login_attempt < 3) {
      $mysqli->query("INSERT INTO failed_login (ip_address,date) VALUES ('$ip', NOW())");
    } else {
      $message = "You have tried more than 3 invalid attempts. Enter captcha code.";
    }
  }
}
if(isset($_SESSION["user_id"])) {
header("Location:user/user_dashboard.php");
}
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
     <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>
    <!-- Bootstrap core CSS -->



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="login.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" action="">
  <div class="text-center mb-4">
    
    <h1 class="h3 mb-3 font-weight-normal">Halaman Login User</h1>
    
  </div>
  <p> <?php if($message!="") { echo $message; } ?> </p>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputEmail">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>
 
  <div class="form-label-group">
    <img src="captcha.php" width="200" >

  </div>
     <div class="form-label-group">
   <input type="text" class="form-control" name="Captcha" placeholder="Verification Code" maxlength="5" autocomplete="off" required>&nbsp;
   <label for="InputCaptcha">Masukkan Kode Captcha</label>
  </div>
  
   <?php if (isset($failed_login_attempt) && $failed_login_attempt >= 3) { ?>
 <?php } ?>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; E - Container 2019</p>
</form>
</body>
</html>
