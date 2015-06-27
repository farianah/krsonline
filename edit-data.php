<?php 
	include ("koneksi.php");
	$nim=$_GET['nim'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Data Mahasiswa</title>
	</head>
	<body>
	<form method="post">
	<?php 
		$querypilih = "SELECT * FROM mahasiswa where nim=$nim";
		$result = mysqli_query($koneksi, $querypilih);
		$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
	 ?>
		<table>			
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
			</tr>			
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="tempatlahir" value="<?php echo $row['tempatlahir']; ?>"></td>
			</tr>			
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggallahir" value="<?php echo $row['tanggallahir']; ?>"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><input type="text" name="agama" value="<?php echo $row['agama']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="text" name="jeniskelamin" value="<?php echo $row['jeniskelamin']; ?>"></td>
			</tr>
			<tr>
				<td>No. Telp</td>
				<td>:</td>
				<td><input type="text" name="notelp" value="<?php echo $row['notelp']; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="enter" value="OK">
					<a href="mahasiswa.php">Kembali</a>
				</td>
			</tr>	
		</table>
	
	<?php 
		if (isset($_POST['enter'])) {
			$nama = $_POST['nama'];
			$tempatlahir = $_POST['tempatlahir'];
			$tanggallahir = $_POST['tanggallahir'];
			$agama = $_POST['agama'];
			$jeniskelamin = $_POST['jeniskelamin'];
			$notelp = $_POST['notelp'];
			$email = $_POST['email'];

			$queryupdate = "UPDATE mahasiswa SET nama ='$nama', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', 
							agama = '$agama', jeniskelamin = '$jeniskelamin' ,notelp = '$notelp', email = '$email' WHERE nim = $nim"; 
			
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