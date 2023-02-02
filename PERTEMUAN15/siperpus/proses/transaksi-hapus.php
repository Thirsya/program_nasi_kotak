<?php
include'../koneksi.php';
$id_anggota=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbtransaksi
	WHERE idtransaksi='$id_anggota'"
);

header("location:../index.php?p=transaksi-peminjaman");
?>