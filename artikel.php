<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel");
$aktif = 'artikel';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Daftar Artikel - SMK Negeri 53 Jakarta</title>
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
				<div class="title mb-3">
					Artikel Terbaru
				</div>
				<?php 
				$koneksi = mysqli_connect('localhost', 'root', '', 'uasnative2021') or die('gagal konek');	
				$page = (isset($_GET['page']))? $_GET['page'] : 1;
				$limit = 3; 
				$limit_start = ($page - 1) * $limit;
				$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel LIMIT ".$limit_start.",".$limit);
				$no = $limit_start + 1; 

				while($artikel = mysqli_fetch_assoc($query)) : ?>
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

				<ul class="pagination justify-content-center">
					<?php
					if($page == 1){
						?>
						<li class="disabled page-item"><a class="page-link" href="#">First</a></li>
						<li class="disabled page-item"><a class="page-link" href="#">&laquo;</a></li>
						<?php
					}else{
						$link_prev = ($page > 1)? $page-1:1;
						?>
						<li class="page-item"><a class="page-link" href="artikel.php?page=1">First</a></li>
						<li class="page-item"><a class="page-link" href="artikel.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
						<?php
					}

					$sql2 = mysqli_query($koneksi,'select count(*) as jumlah from tbl_artikel ');
					$get_jumlah = mysqli_fetch_assoc($sql2);
					$jumlah_page = ceil($get_jumlah['jumlah']/$limit);
					$jumlah_number = 3;
					$start_number = ($page>$jumlah_number)?$page-$jumlah_number :1;
					$end_number = ($page<($jumlah_page - $jumlah_number))?$page + $jumlah_number : $jumlah_page;

					for($i = $start_number; $i <= $end_number; $i++){
						$link_active = ($page==$i)?'active':'';
						?>
						<li class="<?php echo $link_active?> page-item"><a class="page-link" href="artikel.php?page=<?php echo $i?>"><?php echo $i ?></a></li>
						<?php
					}
					if($page == $jumlah_page){
						?>
						<li class="disabled page-item"><a class="page-link" href="#">&raquo;</a></li>
						<li class="disabled page-item"><a class="page-link" href="#">Last</a></li>
						<?php
					}else{
						$link_next = ($page <$jumlah_page)?$page+1 :$jumlah_page;
						?>
						<li class="page-item"><a class="page-link" href="artikel.php?page=<?php echo $link_next ?>">&raquo;</a></li>
						<li class="page-item"><a class="page-link" href="artikel.php?page=<?php echo $jumlah_page ?>">Last</a></li>
						<?php
					}
					?>
				</ul>

			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<div class="text-white foot">
			2020 © Copyright by Muhammad Ihsan Sepriawal.
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>