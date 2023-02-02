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
									<th><h3>Tambah Data Barang<h3></th>
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
								<td class="quantity">
									<div class="input-group">
										<input type="text" name="no" class="form-text text-muted">
									</div>
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
								<td class="quantity">
									<div class="input-group">
										<input type="text" name="merek" class="form-text text-muted">
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
								<td class="quantity">
									<div class="input-group">
										<input type="text" name="warna" class="form-text text-muted">
									</div>
								</td>
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
									<div class="input-group">
										<input type="text" name="jumlah" class="form-text text-muted">
									</div>
								</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					
							
						</table>
					</div>
				</div>
			</div>
				<td>
	                <input class="mt-3 btn btn-primary" type="submit" value="Simpan" name="simpan" style="margin-bottom: 5px">
	                <input type="reset" class="mt-3 btn btn-info" value="Reset" style="margin-bottom: 5px">
	                <a href="index.php"><input type="button" class="mt-3 btn btn-success" value="Kembali" style="margin-bottom: 5px"></a>
	            </td>
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