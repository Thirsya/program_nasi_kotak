<?php
	if (isset($_GET['nama']) AND isset($_GET['alamat']) AND isset($_GET['jenisKelamin']) AND isset($_GET['usia'])){
		$nama =$_GET['nama'];
		$alamat = $_GET['alamat'];
		$jenisKelamin = $_GET['jenisKelamin'];
		$usia = $_GET['usia'];
		$isi_form="&nama=$nama&alamat=$alamat&jenisKelamin=$jenisKelamin&uisa=$usia";
	} 
	else{
		header("Location:biodata.php?error=variavel_belum_diset");
	} 

	if(empty($nama)){
		header("Location:biodata.php?error=nama_kosong".$isi_form);
	}else if(empty($alamat)){
		header("Location:biodata.php?error=alamat_kosong".$isi_form);
	}else if(empty($jenisKelamin)){
		header("Location:biodata.php?error=jenisKelamin_kosong".$isi_form);
	}else if(empty($usia)){
		header("Location:biodata.php?error=usia_kosong".$isi_form);
	}
	else{
		echo "Nama : $nama <br> Alamat : $alamat <br> Jenis Kelamin : $jenisKelamin <br> Usia : $usia";
	}
?>