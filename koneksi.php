<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "cobatugas";
			
	$koneksi = mysqli_connect($servername, $username, $password, $databasename);
			
	/* check connection */
		if (mysqli_connect_errno()){
			printf("Connect failed: %s\n", mysqli_conect_error());
			exit();
			}
?>