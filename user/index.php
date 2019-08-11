<!DOCTYPE html>
<html>
<head>
	<title>E - Container | Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	

	<?php 
	if(isset($_GET['pesan'])){

		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}

	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 			
 			<input type="text" class="form-control1" name="vercode" placeholder="Verification Code" maxlength="5" autocomplete="off" required style="width: 225px; height: 26px;" />&nbsp;
        	<img src="captcha.php">
<br><br><br>
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="lupa_password.php">Lupa Kata Sandi ??</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>