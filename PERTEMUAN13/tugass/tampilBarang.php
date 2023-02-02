<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Data Barang</title>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<body>
    <?php
            include ("koneksi.php");
            $no = $_GET['no'];
            $query = "SELECT * FROM barang WHERE no = '$no'";
            $result = mysqli_query($connect, $query);
            $r_tampil_barang = mysqli_fetch_array($result);
        ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
						<table class="table" style="text-align: center;">
                        
						  <thead class="thead-primary">
						    <tr>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
									<th><h3>Detail Data Barang<h3></th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
						    </tr>
						  </thead>
						<tbody>
						<form action="barang-create-proses.php" method="GET">
						    <tr class="alert" role="alert">
								<td>
									No
								</td>
								<td></td>
								<td>
									<?php echo $r_tampil_barang['no'] ?>
								</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr class="alert" role="alert">
								<td>
									Merek
								</td>
								<td></td>
								<td>
									<div class="merek">
										<?php echo $r_tampil_barang['merek'] ?>
									</div>
								</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr class="alert" role="alert">
								<td>
									Warna
								</td>
								<td></td>
								<td>
								  <?php echo $r_tampil_barang['warna'] ?>
								</td>
								<td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr class="alert" role="alert">
								<td>
									Jumlah
								</td>
								<td></td>
								<td class="quantity">
									<?php echo $r_tampil_barang['jumlah'] ?>
								</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
                        
					
                        
						</table>
                        <a href="index.php"><input type="button" class="mt-3 btn btn-success" value="Kembali" style="margin-bottom: 5px"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
    
	</body>
		</tr>
	        </table>
	    </form>
	</div>
</section>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	</body>
</html>