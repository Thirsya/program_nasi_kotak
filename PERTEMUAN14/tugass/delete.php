<?php
	include "pages/koneksi.php";
	include "index.php";
	$id_siswa = isset ($_GET['id']) ? $_GET['id']:'';
	$query="DELETE FROM siswa WHERE id_siswa='$id_siswa'";
	$result = mysqli_query($db, $query);
	if($result){
		echo 'Data berhasil dihapus';
	}
	else {
		echo "Data gagal dihapus" . mysqli_error($db);
	}
?>