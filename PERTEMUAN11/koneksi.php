<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "barang";
	$connect = mysqli_connect($hostname, $username, $password, $database);

	if (!$connect) {
        echo "koneksi gagal".mysqli_connect_error();
    }
?>