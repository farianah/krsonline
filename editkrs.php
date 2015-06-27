<?php 
	include("koneksi.php");
	$idkrs = $_GET['idkrs'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit KRS</title>
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
		$querykrs = "SELECT * FROM krs where idkrs=$idkrs";
		$result = mysqli_query($koneksi, $querykrs);
		$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
	 ?>
		<table>						
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $row['nim']; ?>"></td>
			</tr>			
			<tr>
				<td>Kode MK</td>
				<td>:</td>
				<td><input type="text" name="kodemk" value="<?php echo $row['kodemk']; ?>"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="enter" value="OK">
					<a href="krs.php">Kembali</a>
				</td>
			</tr>	
		</table>
	
	<?php 
		if (isset($_POST['enter'])) {
			$nim = $_POST['nim'];
			$kodemk = $_POST['kodemk'];
			
			$queryupdate = "UPDATE krs SET idkrs='$idkrs', nim='$nim', kodemk='$kodemk' where idkrs='$idkrs'"; 
			
			if (mysqli_query($koneksi, $queryupdate)){
				echo "Data berhasil di edit";
			}else{
				echo "Eror terjadi Plis cek kembali";
			}		
			mysqli_close($koneksi);
		}
	?>
	</form>
	</body>
</html>