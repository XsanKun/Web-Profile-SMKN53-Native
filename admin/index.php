<?php 
require_once 'cek_session.php';
$active = 'dashboard';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Admin - SMK Negeri 53 Jakarta</title>
	<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../resources/css/styles.css">
</head>
<body>
	<?php require_once 'navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow text-center" style="font-weight: bold;">
					<div class="card-header">Selamat Datang di Halaman Admin SMK Negeri 53 Jakarta</div>
				</div>
				<br><br><br>
				<div class="text-center">
					<img src="../resources/images/logo53.png" alt="" style="width: 330px; height: 300px; opacity: 0.5;">
				</div>
			</div>
		</div>
	</div>
	
	<script src="../resources/js/jquery.js"></script>
	<script src="../resources/js/bootstrap.min.js"></script>
</body>
</html>