<?php
	include("koneksi.php");
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Menu</title>
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
					<a class="brand" href="#">Sistem Informasi Akdemik</a>
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
<div class="container">
	<div class="hero-unit">	
	<ul>
		<li><a href="matakuliahmhs.php">Daftar Matakuliah</a></li>
		<li><a href="update.php">Pilih KRS</a></li>
		<li><a href="krs.php">Lihat KRS</a></li>
	</ul>	
			</div>
		</div>

		<hr>
    </div> 

	</body>
</html>