<?php
	session_start();
	require "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Login</title>
	<link rel="stylesheet" href="register.css">
</head>
<body>
	<div class="main">
		<div class="div-content">
			<h1>SILAHKAN LOGIN AKUN</h1>
			<div class="div-box">
				<form action="" method="post">
					<div>
						<label for="email">Email</label>
						<input type="email" name="email" id="email" autocomplete="off">
					</div>

					<div>
						<label for="password">Password</label>
						<input type="password" name="password" id="password">
					</div>

					<div>
						<input type="submit" name="submit" value="Login">
					</div>

					<div>
						<p><a href="register.php" style="color: black;"><b>Belum Punya Akun?Daftar Disini</b></a></p>
					</div>

					<div>
						<button><a href="tugas.html" target="_blank">Beranda</a></button>
					</div>
				</form>
				<?php
					if(isset($_POST['submit'])){
						$email = htmlspecialchars($_POST['email']);
						$password = htmlspecialchars($_POST['password']);

						$query = mysqli_query($con, "SELECT * FROM user WHERE email='$email'");
						$count = mysqli_num_rows($query);
						
						if($count > 0) {
							$data = mysqli_fetch_array($query);
							if(password_verify($password, $data['password'])) {
								$_SESSION['logged_in'] = true;
								$_SESSION['email'] = $data['email'];

								header("Location: pesan.php");
							}
							else {
								echo "Password Kamu Salah";
							}
						}	
						else {
							echo "Akun Kamu Belum Terdaftar";
						}			
					}
				?>
			</div>	
		</div>
	</div>
</body>
</html>