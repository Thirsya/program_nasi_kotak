<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "barang";
	$connect = mysqli_connect($hostname, $username, $password, $database);

	if (!$connect) {
        echo "Koneksi Gagal".mysqli_connect_error();
	} else {
		echo "Koneksi Berhasil";
	}
?>