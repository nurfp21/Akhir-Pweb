<?php
	require "koneksi.php";
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Register</title>
	<link rel="stylesheet" href="register.css">
</head>
<body>
	<div class="main">
		<div class="div-content">
			<h1>FORM DAFTAR AKUN</h1>
			<div class="div-box">
				<form action="" method="post">
					<div>
						<label for="email">Email</label>
						<input type="email" name="email" id="email">
					</div>

					<div>
						<label for="password">Password</label>
						<input type="password" name="password" id="password">
					</div>

					<div>
						<input type="submit" name="submit" value="Daftar">
					</div>

					<div>
						<p><a href="login.php" style="color: black;"><b>Sudah Punya Akun?Login Disini<b></a></p>
					</div>

					<div>
						<button><a href="tugas.html" target="_blank">Beranda</a></button>
					</div>
				</form>

				<?php
					if(isset($_POST['submit'])){
						$email = htmlspecialchars($_POST['email']);
						$password = htmlspecialchars($_POST['password']);
						$encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

						$query = mysqli_query($con, "SELECT email FROM user WHERE email ='$email'");
						$count = mysqli_num_rows($query);

						if($count > 0){
							echo "Tidak Bisa Terdaftar Email Sudah Ada";
						}
						else {
							$queryInsert = mysqli_query($con, "INSERT INTO user (email, password) VALUES ('$email', '$encryptedPassword')");

							if($queryInsert) {
								echo "Akun Terdaftar";
							}

						}
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>		