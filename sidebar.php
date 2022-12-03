<?php 

$query_artikel_terbaru = mysqli_query($koneksi, "SELECT * FROM tbl_artikel ORDER BY tanggal ASC LIMIT 4");
$query_kategori_artikel= mysqli_query($koneksi, "SELECT * FROM tbl_kategori_artikel LIMIT 4");

?>
<div class="col-md-3 ml-5">

	<div class="list-group">
		 <h1 class="text-center" style="font-size: 40px; font-family: arial; background-color: #15477A; border-radius: 5px; color: #fff;" id="jam"></h1>
	</div>

	<div class="list-group">
		<span class="list-group-item text-white" style="background-color: #15477A;">Artikel Terbaru</span>
		<?php while($artikel_terbaru = mysqli_fetch_assoc($query_artikel_terbaru)) : ?>
			<a href="detail_artikel.php?id=<?= $artikel_terbaru['id'] ?>" class="list-group-item list-group-item-action"><?= $artikel_terbaru['judul'] ?></a>
		<?php endwhile; ?>
	</div>

	<div class="list-group">
		<span class="list-group-item text-white mt-3" style="background-color: #15477A;">Kategori Artikel</span>
		<?php while($kategori_artikel = mysqli_fetch_assoc($query_kategori_artikel)) : ?>
			<a href="kategori.php?id=<?= $kategori_artikel['id'] ?>" class="list-group-item list-group-item-action"><?= $kategori_artikel['nama_kategori'] ?></a>
		<?php endwhile; ?>
	</div>
</div>

<script type="text/javascript">
    window.onload = function() { jam(); }
   
    function jam() {
     var e = document.getElementById('jam'),
     d = new Date(), h, m, s;
     h = d.getHours();
     m = set(d.getMinutes());
     s = set(d.getSeconds());
   
     e.innerHTML = h +':'+ m +':'+ s;
   
     setTimeout('jam()', 1000);
    }
   
    function set(e) {
     e = e < 10 ? '0'+ e : e;
     return e;
    }
   </script>