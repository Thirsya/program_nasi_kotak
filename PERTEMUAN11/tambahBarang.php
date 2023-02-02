<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Data Barang</title>
	</head>
	<body>
		<div class="container">
	    <h2>Tambah Data Barang</h2>
	    <form action="barang-create-proses.php" method="GET">
	        <table>
	            <tr>
	                <td><label class="mt-3" for="no">No</label></td>
	                <td><input class="form-control mt-3" type="text" name="no"></td>
	            </tr>
	            <tr>
	                <td><label class="mt-3" for="merek">Nama Merek</label></td>
	                <td><input class="form-control mt-3" type="text" name="merek"></td>
	            </tr>
	           <tr>
	                <td><label class="mt-3" for="warna">Warna</label></td>
	                <td><input class="form-control mt-3" type="text" name="warna"></td>
	            </tr>
	            <tr>
	                <td><label class="mt-3" for="jumlah">Jumlah</label></td>
	                <td><input class="form-control mt-3" type="text" name="jumlah"></td>
	            </tr>
	            <tr>
	                <td>
	                    <input class="mt-3 btn btn-primary" type="submit" value="Simpan" name="simpan" style="margin-bottom: 5px"><br>
	                    <input type="reset" class="mt-3 btn btn-info" value="Reset" style="margin-bottom: 5px"><br>
	                    <a href="beranda.php"><input type="button" class="mt-3 btn btn-success" value="Kembali" style="margin-bottom: 5px"></a>
	                </td>
	            </tr>
	        </table>
	    </form>
	</div>
	</body>
</html>