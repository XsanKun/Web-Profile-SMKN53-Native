<?php 

session_start();

$active = 'dashboard';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Admin - SMK Negeri 53 Jakarta</title>
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/styles.css">
</head>
<body>
	<div style="text-align: center;"> 
		<h3 style="background-color: #15477A; color: #fff; padding: 10px" id="clock"></h3>
		<script type="text/javascript"> 
			window.onload = function() {clock();}
			function clock() {
				var e = document.getElementById('clock'),
				d = new Date(), h, m, s;
				h = d.getHours();
				m = set(d.getMinutes());
				s = set(d.getSeconds());

				e.innerHTML = h+' : '+ m +' : '+s;

				setTimeout('clock()', 1000); 
			}
			function set(e){
				e = e<10? '0'+e:e;
				return e;

			}
		</script>
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-md-5" style="margin-top: 30px;">
					<div>
						<h2 class="text-center">SMK NEGERI 53 JAKARTA<hr style="background-color: #15477a; width: 50%; min-height: 3px; margin-top: 15px;"></h2><br>
					</div>
					<div class="card shadow">
						<div class="card-header text-center text-white" style="background-color:#15477A; font-size: 18px;">Silahkan Login</div>
						<div class="card-body">
							<?php if(isset($_SESSION['sukses'])) : ?>
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<?php unset($_SESSION['sukses']) ?>
								<?php elseif(isset($_SESSION['gagal'])) : ?>
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<?php unset($_SESSION['gagal']) ?>
								<?php endif; ?>
								<form action="proses_login.php" method="POST">
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" autocomplete="off" required="required">
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" autocomplete="off" required="required">
									</div>
									<div class="form-group">
										<button type="submit" name="login" class="btn btn-md btn-block text-white hover" style="background-color: #15477A;">Login</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script src="resources/js/jquery.js"></script>
			<script src="resources/js/bootstrap.min.js"></script>
		</body>
		<style>
			button.hover:hover {
				background-color: #00254a;
			}
		</style>
		</html>