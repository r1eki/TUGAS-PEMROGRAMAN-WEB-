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
 $query=mysqli_query($con,"SELECT * FROM user WHERE username='$username'");
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
	<title>E - Container | Reset Password</title>

	<link rel="stylesheet" type="text/css" href="style.css">
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
 



	<div class="kotak_login">
		<p class="tulisan_login">Forgot Paswword</p>
 		<p style="padding-left:20%; color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></p>
     
     <p style="padding-left:20%; color:green">
      <?php if($msg){
        echo htmlentities($msg);
      }?></p>
		<form name="forgot" method="post">
			<label>Username / E-mail</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

 			<label>Password Baru</label>
			<input class="form_login" type="password" placeholder="New Password" id="password" name="password" required="required">

			<label>Konfirmasi Password Baru</label>
			 <input class="form_login" type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" required="required">


			<input type="submit" class="tombol_login" name="change" onclick="return valid();" value="RESET PASSWORD">
 			
			<br/>
			<br/>
			
		</form>
		
	</div>
 <!-- Essential javascripts for application to work-->
    <script src="../login/login/js/jquery-3.2.1.min.js"></script>
    <script src="../login/login/js/popper.min.js"></script>
    <script src="../login/login/js/bootstrap.min.js"></script>
    <script src="../login/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../login/login/js/plugins/pace.min.js"></script>
 
</body>
</html>