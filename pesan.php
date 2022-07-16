<?php
	require "session.php";
?>
<html>
<head>
	<title>Pemesanan Tiket</title>
	<style type="text/css">
		.container {
			xmin-width: 1000px;
			margin: auto;
			position: relative;
			background-image: url(img/monjali3.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
		}

	</style>
</head>
<body>
	<script language="Javascript">
		function pesan()
		{
			var nama=(document.fform.inama.value);
			var ktp=(document.fform.iktp.value);
			var jumlah=(document.fform.ijumlah.value);
			var harga=15000*jumlah;
			var total=0.0;
			var disc=0.0
			if (document.fform.idisc.checked==true)
			{
				disc=harga*0.5;
			}
			else
			{
				disc=0.0;
			}
			total=harga-disc;
			document.fform.onama.value=nama;
			document.fform.oktp.value=ktp;
			document.fform.ojumlah.value=jumlah;
			document.fform.ototal.value=total;
		}
	</script>

	<form name="fform">
		<div class="container">
			<pre>
				<h3 align="center">Pemesanan Tiket (Online)</h3>
				
				Nama 	: <input type="text" size="30" name="inama">
				No.KTP 	: <input type="text" size="30" name="iktp">
				Jumlah tiket 	: <input type="text" size="2" name="ijumlah">
				Rombongan Anak TK, Yatim Piatu / Difabel : <input type="checkbox" name="idisc">

				<input type="button" value="PESAN" onclick="pesan()">




				========================TIKET=======================
				NAMA 	:<input type="text" size="30" name="onama">
				NO.KTP 	:<input type="text" size="30" name="oktp">
				JUMLAH 	:<input type="text" size="2" name="ojumlah">
				TOTAL 	:<input type="text" size="2" name="ototal">
				====================================================

				<button><a href="logout.php" target="_blank">Logout</a></button>
			</pre>
		</div>
	</form>
	
</body>
</html>