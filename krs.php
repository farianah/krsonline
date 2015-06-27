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
<h3>KRS</h3>
		<table border="1" cellspacing="0">
			<tr>
			
			<tr>
				<th width="75"><center>ID_KRS</center></th>
				<th width="150"><center>NIM</center></th>
				<th width="30"><center>Kode Matakuliah</center></th>
				
			</tr>
			<?php
				$queryselectmhs="SELECT * FROM krs";
				$resultmhs=mysqli_query($koneksi, $queryselectmhs);
				while ($row=mysqli_fetch_array($resultmhs, MYSQLI_ASSOC)){
					
					echo "<td align='center'>".$row['idkrs']."</td>";
					echo "<td>".$row['nim']."</td>";
					echo "<td align='center'>".$row['kodemk']."</td>";
					echo "</tr>";
			}
				mysqli_close($koneksi);
			?>
		<a href='update.php'>Pilih Lagi</a><br/>
		<a href="logout.php"><i class="icon-off"></i>Logout</a>
		</table>		<hr>
    </div> 

	</body>
</html>