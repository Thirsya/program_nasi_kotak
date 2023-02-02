<?php
	include "../koneksi.php";
		$id_siswa = $_GET['id_siswa'];
		$nama = $_GET['nama'];
		$alamat = $_GET['alamat'];
		$jenis_kelamin = $_GET['jenis_kelamin'];
		$agama = $_GET['agama'];
		$asal_sekolah = $_GET['asal_sekolah'];
		$query = "UPDATE siswa SET nama = '$nama', alamat='$alamat', jenis_kelamin=, '$jenis_kelamin', agama='$agama', asal_sekolah='$asal_sekolah' WHERE id_siswa='$id_siswa'";
		$result = mysqli_query($connect, $query);
		if($result){
			echo "Berhasil update data";
			?>
			<a href="pages/siswa.php">Lihat data</a>
			<?php
		}
		else{
			echo "Gagal update data" . mysqli_error($db);
		}
?>