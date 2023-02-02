<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<table>
		<form method="POST" action="prosesEdit.php">
			 	<tr>
			 		<td>Id</td>
			 		<td><input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'];?>" readonly></td>
			 	</tr>

			 	<tr>
				 	<td>Nama Siswa</td>
				 	<td><input type="text" name="nama" value="<?php echo $row ['nama_siswa'];?>"></td>
			 	</tr>

			 	<tr>
				 	<td>Alamat</td>
				 	<td><input type="text" name="alamat" value="<?php echo $row ['alamat'];?>"></td>
			 	</tr>

			 	<tr>
				 	<td>Jenis Kelamin</td>
				 	<td>
				 		<input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki-laki <br>
                        <input type="radio" name="jenis_kelamin" value="P"  <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Perempuan</td>
			 	</tr>

			 	<tr>
                    <td><label class="mt-3" for="agama">Agama</label></td>
                    <td><select class="form-control mt-3" name="agama" value="<?php echo $row ['agama'];?>">
                            <option disabled selected>Pilih salah satu</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select></td>
                </tr>

                <tr> 
                    <td><label class="mt-3" for="sekolah">Sekolah Asal</label></td>
                    <td><input type="text" name="sekolah" value="<?php echo $row ['sekolah_asal'];?>">></td>
                </tr>

			 	<tr>
			 		<td><input type="submit" name="edit" value="Edit Data" ></td>
			 	</tr>
		</form>
	</table>
</body>
</html>