<?php
	include("koneksi.php");
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TB</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" 
					data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">Sistem Informasi Akademik</a>
					<div class="nav-collapse">
						<ul class="nav">
						
						</ul>
						<div class="btn-group navbar-form pull-right">
							<a class="btn btn-primary dropdown-toggle" 
							data-toggle="dropdown" href="#"><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="logout.php"><i class="icon-off"></i>Logout</a></li>
							</ul>
							
				</div>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
<?php
	include("koneksi.php");
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TB</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" 
					data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">Sistem Informasi Akademik</a>
					<div class="nav-collapse">
						<ul class="nav">
						
						</ul>
						<div class="btn-group navbar-form pull-right">
							<a class="btn btn-primary dropdown-toggle" 
							data-toggle="dropdown" href="#"><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="logout.php"><i class="icon-off"></i>Logout</a></li>
							</ul>
							
				</div>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
<h2>KRS</h2>
	<form method="post">
		<table>
			<tr>
				<td>ID_KRS</td>
				<td>:</td>
				<td><input type="text" name="idkrs"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kode Matakuliah</td>
				<td>:</td>
				<td><input type="text" name="kodemk"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['submit'])) {
			$idkrs = $_POST['idkrs'];
			$nim = $_POST['nim'];	
			$kodemk = $_POST['kodemk'];

			$insertmahasiswa = "insert into krs (idkrs, nim, kodemk)
								VALUES ('$idkrs','$nim','$kodemk')";
			if (mysqli_query($koneksi, $insertmahasiswa)) {
				echo "Data baru berhasil dibuat";
			} else {
				echo "Error: ". $insertmahasiswa ."<br/>".mysqli_error($koneksi);
			}
			echo "<br/><br/><a href='krs.php'>Lihat Data KRS Baru</a>";

			mysqli_close($koneksi);
		}
	?>
	<a href="logout.php"><i class="icon-off"></i>Logout</a>
	
		<hr>
    </div> 

	</body>
</html>