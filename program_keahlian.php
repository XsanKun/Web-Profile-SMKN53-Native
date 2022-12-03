<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel");

$aktif = 'program_keahlian';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Program Keahlian - SMK Negeri 53 Jakarta</title>
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
					<h3>Program Keahlian</h3>
				</div>
				<div class="artikel">
					Program Keahlian yang ada di SMK Negeri 53 Jakarta ada 9, ini hampir semuanya merupakan satu-satunya program keahlian yang ada di Indonesia, kecuali untuk program ICT ada untuk yang 3 tahun tapi untuk yang 4 tahun di sekolah ini merupakan satu-satunya. Semua program keahlian perintisnya dari SMK Negeri 53 Jakarta. Hal ini merupakan suatu potensi unggulan karena dengan mudah siswa yang lulus terserap oleh industri hal ini telah berlangsung sejak berdirinya STM 1 DKI yang sekarang menjadi SMK Negeri 53 Jakarta.
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