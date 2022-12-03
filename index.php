<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel LIMIT 3");
$aktif = 'home';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home - SMK Negeri 53 Jakarta</title>
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

		<!-- hero image -->
		<div class="hero">
			<img src="resources/images/banner-siswa.jpg" alt="">
		</div>

		<!-- content -->
		<div class="row p-3 justify-content-center">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<div class="title mb-3">
							Sambutan Kepala Sekolah
						</div>
						<p>Bismillahirohmannirrohim Assalamualaikum Warahmatullah Wabarakatuh Kami mengucapkan selamat datang di Website kami Sekolah Menengah Kejuruan Negeri (SMKN) 53 Jakarta yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa masyarakat guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami. Kami... <a href="sambutan.php">Lainnya</a></p>
					</div>
					<div class="col-md-6">
						<div class="title mb-3">
							Program Sekolah
						</div>
						<p>Adanya berbagai kegiatan pelatihan dari luar yang sering dilakukan di sekolah ini memudahkan sekolah berhubungan dengan dunia usaha dan dunia industri juga dalam mengadopsi kemajuan teknologi yang saat ini berkembang dengan pesat... <a href="program_sekolah.php">Lainnya</a></p>
					</div>
					<div class="col-md-6">
						<div class="title mb-3">
							Program Keahlian
						</div>
						<p>Program Keahlian yang ada di SMK Negeri 1 Cimahi ada 9, ini hampir semuanya merupakan satu-satunya program keahlian yang ada di Indonesia, kecuali untuk program ICT ada untuk yang 3 tahun tapi untuk yang 4 tahun di sekolah ini merupakan... <a href="program_keahlian.php">Lainnya</a></p>
					</div>
					
				</div>
				<div class="title mb-3">
					Informasi Terbaru
				</div>
				<?php while($artikel = mysqli_fetch_assoc($query)) : ?>
					<div class="artikel">
						<div class="info">
							<div class="post mb-2">
								<span class="tgl"><?= date('d M y', strtotime($artikel['tanggal'])) ?></span>
								<span class="judul"><a href="detail_artikel.php?id=<?= $artikel['id'] ?>"><?= $artikel['judul'] ?></a></span>
							</div>
						</div>
						<div class="detail">
							<div class="clearfix" style="text-align: justify;">
								<img src="images/artikel/<?= $artikel['foto'] ?>" alt="" width="250px" class="float-left mr-3">
								<?= substr($artikel['isi'], 0, 170) . '... ' ?><a href="detail_artikel.php?id=<?= $artikel['id'] ?>">Lainnya</a>
							</div>
						</div>
						<hr>
					</div>
				<?php endwhile; ?>
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