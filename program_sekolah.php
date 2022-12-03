<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel");

$aktif = 'program_sekolah';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Program Sekolah - SMK Negeri 53 Jakarta</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/styles.css">
</head>
<body>
	<div class="container-fluid bg-light">
		<!-- top bar -->
		<div class="marquee">
			<marquee direction="left">Info!!! Pendaftaran SMK Negeri 53 Jakarta bisa di akses melalui website www.ppdb-jakarta.com</marquee>
		</div>
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<img src="resources/images/logo53.png" alt="Logo Sekolah" width="80px" height="75px" class="float-left mr-3">
				<div class="text float-right">
					<span class="smk">SMK Negeri 53 Jakarta</span><br>
					<span class="visi">Mewujudkan SMK Berkarakter, Berkompeten dan Unggul.</span>
				</div>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- hero image  -->
		<div class="hero">
			<img src="resources/images/banner-siswa.jpg" alt="">
		</div>

		<!-- content -->
		<div class="row p-3 justify-content-center">
			<div class="col-md-8">
				<div class="title mb-3">
					<h3>Program Sekolah</h3>
				</div>
				<div class="artikel">
					Adanya berbagai kegiatan pelatihan dari luar yang sering dilakukan di sekolah ini memudahkan sekolah berhubungan dengan dunia usaha dan dunia industri juga dalam mengadopsi kemajuan teknologi yang saat ini berkembang dengan pesat.
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<div class="text-white foot">
			2021 © Copyright by Muhammad Ihsan Sepriawal.
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>