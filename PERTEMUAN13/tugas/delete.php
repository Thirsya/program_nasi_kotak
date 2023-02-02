<?php
	include "pages/koneksi.php";
	$id_siswa = isset ($_GET['id']) ? $_GET['id']:'';
	$query="DELETE FROM siswa WHERE id_siswa='$id_siswa'";
	$result = mysqli_query($db, $query);
	if($result){
		echo '<script language="javascript">';
echo 'alert("Data berhasil dihapus");';
echo ' window.location = "index.php?p=siswa";';
echo '</script>';
	}
	else {
		echo "Data gagal dihapus" . mysqli_error($db);
	}
?>