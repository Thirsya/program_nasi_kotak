<?php
	include "pages/koneksi.php";
	include "index.php";
		$id_siswa = $_POST['id_siswa'];
		$nama_siswa = $_POST['nama_siswa'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$agama = $_POST['agama'];
		$sekolah_asal = $_POST['sekolah_asal'];
		$query = "UPDATE siswa SET nama_siswa = '$nama_siswa', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id_siswa='$id_siswa'";
		// echo $query;
		$result = mysqli_query($db, $query);
		if($result){
				echo 'Data berhasil diupdate';
		}
		else{
			echo "Gagal update data" . mysqli_error($db);
		}
?>