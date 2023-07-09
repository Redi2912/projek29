<?php
	require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Layanan Web</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<style>
	.main{
		height: 100vh;
	}

	.login-box{
		width: 500px;
		height:  400px;
		box-sizing: border-box;
		border-radius: 10px;
	}
</style>

<body>
	<div class="global-container">
		<div class="card login-form">
			<div class="card-body">
				<h1 class="card-title text-center">Selamat Datang Kembali</h1>
			</div>
		</div>
	</div>			
	<div class="main d-flex justify-content-center align-items-center">
		<div class="login-box p-5 shadow">
			<form action="" method="post">
				<h1 class= "text-center mt+3">Masuk</h1>
				<div>
					<label for="username">Masukan Email</label>
					<input type="text" class="form-control" name="username" id="username">
				</div>
				<div>
					<label for="password">Masukan Password</label>
					<input type="text" class="form-control" name="password" id="password">
					<div id="password" class="form-text">Belum Punya Akun?</div>
				</div>
				<div>
					<button class="btn btn-success form-control mt-5" type="submit">Masuk</button>
				</div>
			</form>	
	    </div>
	</div>	
</body>
</html>