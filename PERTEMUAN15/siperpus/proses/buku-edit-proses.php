<?php
include'../koneksi.php';
		$idbuku = $_POST['idbuku'];
		$judulbuku = $_POST['judulbuku'];
		$kategori = $_POST['kategori'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$status = $_POST['status'];
		$query = "UPDATE tbbuku SET judulbuku = '$judulbuku', kategori='$kategori', pengarang='$pengarang', penerbit='$penerbit', status='$status' WHERE idbuku='$idbuku'";
		// echo $query;
		$result = mysqli_query($db, $query);
		if($result){
				echo '<script language="javascript">';
				echo 'alert("Data berhasil diupdate");';
				echo ' window.location = "index.php?p=buku";';
				echo '</script>';
		}
		else{
			echo "Gagal update data" . mysqli_error($db);
		}
		    header("location:../index.php?p=buku");  
?>