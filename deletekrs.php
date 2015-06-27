<?php 
	include("koneksi.php");
	$idkrs = $_GET['idkrs'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Delete KRS</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<style>
		h2 {
		    background-color: blue;
		}
	</style>
		<form method="post">
			<?php
				$selectkrs = "SELECT * FROM krs WHERE idkrs=$idkrs";
				$resultkrs = mysqli_query($koneksi, $selectkrs);
				$row = mysqli_fetch_array($resultkrs, MYSQLI_ASSOC);

				if (mysqli_num_rows($resultkrs) == " ") {
					echo '<font color="red">Data mahasiswa tidak ditemukan.</font>';
				} else {
			?>
			<h2 align="center">DELETE KRS</h2>
			<h4>Apakah anda yakin ingin menghapus data ini?</h4>
			<div class="container">
				<form class="form-horizontal">
					<label>NIM : <input type="text" disabled value="<?php echo $row['nim']; ?>" disabled/></label></td><br/>
					<label>Kode MK : <input type="text" disabled value="<?php echo $row['kodemk']; ?>" disabled/></td></label>
					<label><button type="submit" class="btn btn-primary" name="submit">Submit</button></label>
				</form>
			</div>
			<?php
				}
				
			if (isset($_POST['submit'])) {
				$deletekrs = "DELETE FROM krs WHERE idkrs=$idkrs"; 
				if (mysqli_query($koneksi, $deletekrs)) {
					echo "Data berhasil dihapus";
					echo "<br/><br/><a href='krsmulti.php'>Kembali ke Daftar KRS</a>";
				} else {
					echo "Error: ". $deletekrs ."<br/>". mysqli_error($koneksi);
				}
					mysqli_close($koneksi);
				}
			?>
		</form>
	</body>
</html>