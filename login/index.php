<?php session_start();
error_reporting(0);
include("../login/config.php");
if(isset($_POST['submit'])) {
  $_SESSION['submit']='';
}

if(isset($_POST['change']))
{
 $username=$_POST['username'];
 $password=md5($_POST['password']);
 $query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username'");
 $num=mysqli_fetch_array($query);
 if($num>0)
 {
  mysqli_query($con,"update admin set password='$password' WHERE username='$username'");
  $msg="Password Changed Successfully";
}
else
{
  $errmsg="Invalid username";
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="login/img/icon.png">
  <link rel="shortcut icon" href="profile.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../login/login/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Change Password</title>
  <script type="text/javascript">
    function valid()
    {
      if(document.forgot.password.value!= document.forgot.confirmpassword.value)
      {
        alert("Password and Confirm Password Field do not match  !!");
        document.forgot.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover">
    </div>
    
  </section>
  <section class="login-content">
    <div class="login-box">
     <p style="padding-left:20%; color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></p>
     
     <p style="padding-left:20%; color:white;">
      <?php if($msg){
        echo htmlentities($msg);
      }?></p>
      
      <form class="login-form" name="forgot" method="post">
      <h1 style="color: #fff; text-align: center; margin-top: 10px;"> Reset Password </h1><br>
          <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="username">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" placeholder="New Password" id="password" name="password">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword">
          </div>
          <div class="form-group btn-container">
            <button type="submit" name="change" onclick="return valid();" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET PASSWORD</button>
          </div>
        </form>
      </div>
    </section>
    

    <!-- Essential javascripts for application to work-->
    <script src="../login/login/js/jquery-3.2.1.min.js"></script>
    <script src="../login/login/js/popper.min.js"></script>
    <script src="../login/login/js/bootstrap.min.js"></script>
    <script src="../login/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../login/login/js/plugins/pace.min.js"></script>
    
  </body>
  </html>