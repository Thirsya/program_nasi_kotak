<?php
	$nama = $_POST['nama'];

	if($nama == ""){
		header("location:kominfo.php?nama=kosong");
	}else{
		echo "Nama Anda adalah ".$nama;
	}
?>