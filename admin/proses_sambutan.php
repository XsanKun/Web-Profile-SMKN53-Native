<?php 

require_once '../koneksi.php';
require_once 'cek_session.php';
$sambutan = mysqli_real_escape_string($koneksi, isset($_POST['sambutan']) ? $_POST['sambutan'] : '');
$query = mysqli_query($koneksi, "UPDATE tbl_sambutan SET sambutan = '$sambutan' WHERE id = 1");

if($query){
	$_SESSION['sukses'] = 'Sambutan Berhasil Diubah!';
	header('Location: sambutan.php');
} else {
	$_SESSION['gagal'] = 'Sambutan Gagal Diubah!';
	header('Location: sambutan.php');
}