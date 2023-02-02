<?php
	include "../koneksi.php";
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
		$foto = "admin-no-photo.jpg";
	else
		$foto = $r_tampil_anggota['foto'];
?>
<div id="label-page"><h3>Kartu Transaksi</h3></div>
<div id="content">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['idtransaksi']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['idanggota']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['idbuku']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['tglpinjam']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Kembali</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['tglkembali']; ?></td>
		</tr>
	</table>
</div>
<script>
		window.print();
	</script>