<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_anggota['foto'];
?>
<div id="label-page"><h3>Edit Data Tansaksi</h3></div>
<div id="content">
	<form action="proses/transaksi-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idtransaksi']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="idanggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="idbuku" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['idbuku']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="tglpinjam" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['tglpinjam']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Kembali</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="tglkembali" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['tglkembali']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>