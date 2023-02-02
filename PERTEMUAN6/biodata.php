<!DOCTYPE html>
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<h2>FORM BIODATA SEDERHANA</h2>
	<?php
		//ambil nilai variabel error
		if (isset($_GET['error'])){
			$error=$_GET['error'];
		}
		else{
			$error="";
		}

		//siapkan pesan kesalahan
		$pesan="";
		if ($error=="variabel_belum_diset"){
			$pesan="Anda harus mengakses halaman ini dari biodata.php";
		}else if ($error=="nama_kosong"){
			$pesan="Nama harus diisi";
		}else if ($error=="nama_invalid"){
			$pesan="Nama diisi huruf dan spasi";
		}else if ($error=="alamat_kosong"){
			$pesan="Alamat harus diisi";
		}else if($error=="alamat_invalid"){
			$pesan="Alamat tidak sesuai";
		}else if ($error=="jenisKelamin_kosong"){
			$pesan="Jenis Kelamin harus diisi";
		}else if($error=="jenisKelamin_invalid"){
			$pesan="Jenis Kelamin tidak sesuai";
		}else if ($error=="usia_kosong"){
			$pesan="Usia harus diisi";
		}else if($error=="usia_invalid"){
			$pesan="Usia tidak sesuai";
		}

		//siapkan isian form jika terjadi kesalahan
		if (isset($_GET['nama']) AND isset($_GET['alamat']) AND isset($_GET['jenisKelamin']) AND isset($_GET['usia'])){
			$nama=$_GET['nama'];
			$alamat=$_GET['alamat'];
			$jenisKelamin=$_GET['jenisKelamin'];
			$usia=$_GET['usia'];
		}else{
			$nama="";
			$alamat="";
			$jenisKelamin="";
			$usia="";
		}
	?>
	<span class="error"><?php echo $pesan;?></span>

	<table>
		<form method="get" action="cekBiodata.php">
			<tr>
				<td>Nama: </td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>

			<tr>
				<td>Alamat: </td>
				<td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin: </td>
				<td><input type="text" name="jenisKelamin" value="<?php echo $jenisKelamin;?>"></td>
			</tr>

			<tr>
				<td>Usia: </td>
				<td><input type="text" name="usia" value="<?php echo $usia;?>"></td>
			</tr>

			<tr>
				<td><input type="submit" name="kirim" value="Kirim"></td>
			</tr>
		</form>
	</table>
</body>
</html>