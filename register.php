<?php 
	session_start();
    if(isset($_SESSION["login"]))
    {
        header("Location:index.php");
        exit;
    }
	require 'koneksi.php';
	if( isset($_POST["daftar"]))
	{
		if(register($_POST) > 0)
		{
			echo "<script>
					alert('akun admin berhasil dibuat');
					document.location.href = 'login.php';  
				</script>";
		}else
		{
			mysqli_error($db);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="infinity-container">
		<div class="infinity-form-block">
			<div class="infinity-click-box text-center">Click Here to Register</div>
			
			<!-- FORM BEGIN -->
			<div class="infinity-fold">
				<div class="infinity-form">
					<!-- Form -->
					<form action="" method="post">
						<!-- Input Box -->
						<div class="form-input">
							<input type="text" name="username" placeholder="Full Name" required>
						</div>
						<div class="form-input">
							<input type="email" name="email" placeholder="Email Address" required>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Password" required>
						</div>
						<div class="form-input">
							<input type="password" name="password2" placeholder="Konfirmasi Password" required>
						</div>
						<!-- Register Button -->
						<button type="submit" name="daftar" class="btn btn-block">Register</button>
						<div class="text-center text-white">or register with</div>
						<div class="text-center text-white">Already have an account?
							<a class="login-link" href="login.php">Login Now</a>
		            	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('.infinity-click-box').click(function()
			{
				$('.infinity-fold').toggleClass('active')
			})
		})
	</script>
</body>
</html>
