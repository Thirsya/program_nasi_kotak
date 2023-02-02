<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<?php 
include "pages/koneksi.php";
$query = "SELECT * from siswa where id_siswa=".$_GET['id'];
$result = $db->query($query);
$row=$result->fetch_assoc();		
?>
	<table>
		<form method="POST" action="siswa-edit-proses.php">
			 	<tr>
			 		<td>Id</td>
			 		<td><input type="number" name="id_siswa" value="<?= $row['id_siswa'];?>" readonly></td>
			 	</tr>

			 	<tr>
				 	<td>Nama Siswa</td>
				 	<td><input type="text" name="nama_siswa" value="<?php echo $row['nama_siswa'];?>"></td>
			 	</tr>

			 	<tr>
				 	<td>Alamat</td>
				 	<td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>"></td>
			 	</tr>

			 	<tr>
				 	<td>Jenis Kelamin</td>
				 	<td>
						<input type="radio" name="jenis_kelamin" value="L" <?= $row['jenis_kelamin'] == "L"?'checked':'';?> > Laki-Laki
						<input type="radio" name="jenis_kelamin" value="P" <?= $row['jenis_kelamin'] == "P"?'checked':'';?> > Perempuan
                    </td>
			 	</tr>

			 	<tr>
                    <td><label class="mt-3" for="agama">Agama</label></td>
                    <td><select class="form-control mt-3" name="agama" value="<?php echo $row ['agama'];?>">
                            <option disabled >Pilih salah satu</option>
                            <option value="Islam" <?= $row['agama']=='Islam'?'selected':''?>>Islam</option>
                            <option value="Kristen" <?= $row['agama']=='Kristen'?'selected':''?>>Kristen</option>
                            <option value="Katolik" <?= $row['agama']=='Katolik'?'selected':''?>>Katolik</option>
                            <option value="Hindu" <?= $row['agama']=='Hindu'?'selected':''?>>Hindu</option>
                            <option value="Buddha" <?= $row['agama']=='Buddha'?'selected':''?>>Buddha</option>
                            <option value="Konghucu" <?= $row['agama']=='Konghucu'?'selected':''?>>Konghucu</option>
                        </select></td>
                </tr>

                <tr> 
                    <td><label class="mt-3" for="sekolah">Sekolah Asal</label></td>
                    <td><input type="text" name="sekolah_asal" value="<?= $row['sekolah_asal'];?>"></td>
                </tr>
	</table>
	<tr>
			 		<input class="mt-3 btn btn-primary" type="submit" value="Simpan" name="simpan">
			 		</form>
                    <a href="index.php"><input type="button" class="mt-3 btn btn-success" value="Kembali"></a>
			 	</tr>
</body>
</html>