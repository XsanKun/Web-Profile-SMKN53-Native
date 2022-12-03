<?php 
require_once 'koneksi.php';
$aktif = 'galeri'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Galeri - SMK Negeri 53 Jakarta</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/styles.css">
	<style>
		.zoom {
			height: 160px; 
			width: 220px; 
			border: 3px solid #15477A;
			transition: transform .4s; /* Animation */
			margin: 0 auto;
		}

		.zoom:hover {
			transform: scale(1.2); /* (150% zoom)*/
		}
	</style>
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

		<!-- hero image -->
		<div class="hero">
			<img src="resources/images/banner-siswa.jpg" alt="">
		</div>

		<!-- content -->
		<div class="row p-3 justify-content-center">
			<div class="col-md-8">
				<div class="title mb-3">
					Galeri SMK Negeri 53 Jakarta
				</div>
				<div>
					<div class="container">
						<div class="row">
							<div class="col-xs mr-3">
								<img class="zoom" src="images/galleri/1.jpg"  alt="">
							</div>
							<div class="col-xs mr-3">
								<img class="zoom" src="images/galleri/2.jpg"  alt="">
							</div>
							<div class="col-xs mr-3">
								<img class="zoom" src="images/galleri/3.jpg"  alt="">
							</div>
							<div class="col-xs mr-3">
								<img class="zoom" src="images/galleri/6.jpg" alt="">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs mr-3">
								<img class="zoom" src="images/galleri/4.jpg"  alt="">
							</div>
							<div class="col-xs mr-3">
								<img class="zoom" src="images/galleri/5.jpg"  alt="">
							</div>
							<div class="col-xs mr-3">
								<img class="zoom" src="images/galleri/6.jpg" alt="">
							</div>
							<div class="col-xs mr-3">
								<img class="zoom" src="images/galleri/2.jpg"  alt="">
							</div>
						</div><br>	
						<div class="title mb-3">
							Tata Letak SMK Negeri 53 Jakarta
						</div>
						<div class="text-center">
							<iframe width="680" height="400" src="https://www.youtube.com/embed/Wwutw8qXcag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<div class="text-white foot">
			2021 © Copyright by Muhammad Ihsan Sepriawal
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>