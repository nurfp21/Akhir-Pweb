<?php
	$con = mysqli_connect("localhost","root","","register");

	if(mysqli_connect_errno()) {
		echo "Tidak Bisa Tekoneksi : " . mysqli_connect_error();
		exit();
	}
?>