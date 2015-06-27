<?php
	session_start();
	session_destroy();
	header("location:loginmahasiswa.php");
?>