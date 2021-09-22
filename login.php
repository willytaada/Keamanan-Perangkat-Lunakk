<?php
	session_start();
    if(isset($_SESSION["login"]))
    {
        header("Location:home.php");
        exit;
    }
	require 'koneksi.php';
	if(isset($_POST["login"]))
	{
	 	$email = $_POST["email"];
	    $password = $_POST["password"];

	        $result = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");

	        if(mysqli_num_rows($result) === 1 )
	        {
	            $row = mysqli_fetch_assoc($result);
	            if (password_verify($password, $row["password"]))
	            {
	                $_SESSION["login"] = true;

	                header("Location: home.php");
	                exit;
	            }
	        }

	        $error = true;
	}
?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="infinity-container">
		<!-- FORM CONTAINER BEGIN -->
		<div class="infinity-form-block">
			<div class="infinity-click-box text-center">Click Here to Login</div>
			
			<div class="infinity-fold">
				<div class="infinity-form">
					<?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic; text-align: center;">username / password error</p>
    <?php endif; ?>
					<form action="" method="post">
						<!-- Input Box -->
						<div class="form-input">
							<input type="email" name="email" placeholder="Email Address" required>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Password" required>
						</div>
						<div class="row">
							<!--Remember Checkbox -->
			                <div class="col-auto d-flex align-items-center">
			                    <div class="custom-control custom-checkbox">
			                        <input type="checkbox" class="custom-control-input" id="cb1">
			                       	<label class="custom-control-label text-white" for="cb1">Remember me
		                        	</label>
				                </div>
				            </div>
		                </div>
		                <!-- Login Button -->
						<button type="submit" name="login" href="home.php" class="btn btn-block">Login</button>
						<div class="text-right">
		                    <a href="reset.html" class="forget-link">Forgot password?</a>
		                </div>
						<div class="text-center text-white">or login with</div>					
						<div class="text-center text-white">Don't have an account?
							<a class="register-link" href="register.php">Register here</a>
		            	</div>
					</form>
				</div>
			</div>
		</div>
		<!-- FORM CONTAINER END -->
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
