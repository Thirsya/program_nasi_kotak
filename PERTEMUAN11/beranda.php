<!DOCTYPE html>
<html>
	<head>
		<title>Data Barang</title>
		<style type="text/css">
			table{
				border=5;
				width=50%;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div>
	    <h2>Data Barang</h2>
	    <table class="table" border="1" cellpadding="5" cellspacing="3">
	        <tr>
	            <th>No</th>
	            <th>Nama Merek</th>
	            <th>Warna</th>
	            <th>Jumlah</th>
	        </tr>
	         <?php
	        include "koneksi.php";
	        $no = 1;
	        $query = "SELECT * FROM barang";
	        $tampil_barang= mysqli_query($connect, $query);
	        if (mysqli_num_rows($tampil_barang) > 0) {
	            while ($r_tampil_barang = mysqli_fetch_array($tampil_barang)){
	        ?>
	        <tr>
			    <td style="width: 50px;"><?php echo $r_tampil_barang['no'] ?></td>
                <td style="width: 150px;"><?php echo $r_tampil_barang['merek'] ?></td>
	            <td style="width: 150px;"><?php echo $r_tampil_barang['warna'] ?></td>
	            <td style="width: 50px;"><?php echo $r_tampil_barang['jumlah'] ?></td>
	        </tr>
	        <?php $no++;
	            }
	        } else {
	            echo "<tr>Data Tidak Ditemukan</tr>";
	        }
	        ?>
	    </table>
	    <a href="tambahBarang.php"><p>Tambah Data</p></a>
	</div>
	</body>
</html>