<?php
	include "../koneksi.php";
	$id_siswa = isset ($array['id_siswa']) ? $array['id_siswa']:'';
	$query="DELETE FROM siswa WHERE id_siswa='$id_siswa'";
	$result = mysqli_query($db, $query);
	if($result){
		echo "Data berhasil dihapus";
?>
		<a href="pages/siswa.php">Lihat data</a>
<?php
	}
	else {
		echo "Data gagal dihapus" . mysqli_error($db);
	}
?>