<!doctype html>
<html lang="en">
	<head>
		<title>Data Barang</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Data Barang</h2>
				</div>
			</div>
			<a class="btn btn-primary" href="tambahBarang.php" role="button">Tambah Data</a>
			<a class="btn btn-secondary" href="index.php" role="button">Refresh</a>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
						<table class="table" style="text-align: center;">
						  <thead class="thead-primary">
						    <tr>
						    	<th>No</th>
						    	<th>Nama Merk</th>
								<th>Warna</th>
								<th>&nbsp;</th>
								<th>Jumlah</th>
								<th>&nbsp;</th>
								<th>Aksi</th>
						    </tr>
						  </thead>

								<?php
								include ("koneksi.php");
								$query = "SELECT * FROM printer";
								$tampil_barang= mysqli_query($connect, $query);
								
								if (mysqli_num_rows($tampil_barang) > 0) {
									while ($r_tampil_barang = mysqli_fetch_array($tampil_barang)){
								?>

						<tbody>
						    <tr class="alert" role="alert">
								<td>
									<?php echo $r_tampil_barang['no'] ?>
								</td>
								<td>
									<div class="email">
										<?php echo $r_tampil_barang['nama_merek'] ?>
									</div>
								</td>
						      	<td>
								  <?php echo $r_tampil_barang['warna'] ?>
								</td>
								<td>
									</td>
								<td class="quantity">
									<?php echo $r_tampil_barang['jumlah'] ?>
								</td>
								<td>
									</td>
								<td>
									<div class="btn-group" role="group">
										<a class="btn btn-info" href="tampilBarang.php?no=<?php echo $r_tampil_barang['no'];?>" role="button">Tampil</a>
										<a class="btn btn-success" href="editBarang.php?no=<?php echo $r_tampil_barang['no'];?>" role="button">Ubah</a>
										<a class="btn btn-danger" href="hapus.php?no=<?php echo $r_tampil_barang['no'];?>" role="button">Hapus</a>
									</div>
								</td>
						    </tr>
						</tbody>
						  	<?php 
								}
							}else {
								echo "<tr>Data Tidak Ditemukan</tr>";
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
	</body>
</html>

