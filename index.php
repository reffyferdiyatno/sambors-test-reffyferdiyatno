<!DOCTYPE html>
<html>
<head>
	<title>data</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="box-form">
		<marquee><h3>data</h3></marquee><hr><br>
		<CENTER><img src="img/profil/CM.png" height="200" width="200"></CENTER>
		<?php 
		if(isset($_GET['err1'])){
			echo '<div class="alert-error">Maaf, input nomor telepon harus angka</div>';
		}
		?>
		<form action="proses-daftar.php" method="post">
			Nama Lengkap :<br>
			<input type="text" name="nama" required/><br><br>
			No. Telepon :<br>
			<input type="text" name="telp" required/><br><br>
			Email :<br>
			<input type="password" name="pass" required/><br><br>
			Alamat Lengkap :<br>
			<textarea name="alamat" rows="5" cols="50"></textarea><br></br><br></br>
			<center><input type="submit" name="daftar" value="Daftar"></center>
		</form>
	</div>	
</body>
</html>
