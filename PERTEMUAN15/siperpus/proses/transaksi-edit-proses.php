<?php
include'../koneksi.php';
		$idtransaksi = $_POST['idtransaksi'];
		$idanggota = $_POST['idanggota'];
		$idbuku = $_POST['idbuku'];
		$tglpinjam = $_POST['tglpinjam'];
		$tglkembali = $_POST['tglkembali'];
		$query = "UPDATE tbtransaksi SET idanggota = '$idanggota', idbuku='$idbuku', tglpinjam='$tglpinjam', tglkembali='$tglkembali' WHERE idtransaksi='$idtransaksi'";
		// echo $query;
		$result = mysqli_query($db, $query);
		if($result){
				echo '<script language="javascript">';
				echo 'alert("Data berhasil diupdate");';
				echo ' window.location = "index.php?p=transaksi-peminjaman";';
				echo '</script>';
		}
		else{
			echo "Gagal update data" . mysqli_error($db);
		}
		    header("location:../index.php?p=transaksi-peminjaman");  
?>