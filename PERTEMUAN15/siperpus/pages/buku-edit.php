<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_anggota['foto'];
?>
<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idbuku']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" name="judulbuku" value="<?php echo $r_tampil_anggota['judulbuku']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="kategori" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['kategori']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="pengarang" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['pengarang']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="penerbit" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['penerbit']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Status</td>			
			<?php
			if($r_tampil_anggota['status']=="Dipinjam")
			{
				echo "<td class='isian-formulir'><input type='radio' name='status' value='Dipinjam' checked>Dipinjam</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='status' value='Tersedia'>Tersedia</td>";
			}
			elseif($r_tampil_anggota['status']=="Tersedia")
			{
				echo "<td class='isian-formulir'><input type='radio' name='status' value='Dipinjam'>Dipinjam</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='status' value='Tersedia' checked>Tersedia</td>";
			}
			?>
			<input type="text" name="status" value="<?php echo $r_tampil_anggota['status']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>