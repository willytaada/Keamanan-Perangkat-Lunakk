<?php

		$db = mysqli_connect("localhost", "root", "", "register");

		function register ($data){
			global $db; 

			$username = strtolower(stripcslashes($data["username"]));
			$email = htmlspecialchars($data["email"]);
			$password = mysqli_real_escape_string($db, $data["password"]);
			$password2 = mysqli_real_escape_string($db, $data["password2"]);

			$result =mysqli_query($db, "SELECT email FROM user WHERE email = '$email'");

			if(mysqli_fetch_assoc($result))
			{
				echo "<script>
				alert('username sudah terdaftar');
				</script>";
				return false;
			}
			if($password !== $password2)
			{
				echo "<script>
				alert('Konfirmasi password tidak sesuai');
				</script>";
				return false;
			}
			$password = password_hash ($password, PASSWORD_DEFAULT);

			mysqli_query ($db, "INSERT INTO user VALUES ('', '$username', '$email', '$password')");

			return mysqli_affected_row($db);
		}
?>
