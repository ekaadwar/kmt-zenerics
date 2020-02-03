<?php 
	#--------------------------------------------------------
	#program untuk menambahkan kolom 'username' dan 'password' pada tabel pesertaor.php
	#--------------------------------------------------------
	include("koneksi.php");

	$sql = "ALTER TABLE `pesertaor` ADD `username` VARCHAR(100) NOT NULL AFTER `alasan`, ADD `password` VARCHAR(100) NOT NULL AFTER `username`;";

	$result = mysqli_query($conn, $sql);

	if($result){
		echo "Kolom username dan password telah ditambahkan.";
	}else{
		echo "Penambahan kolom gagal.";
	}
 ?>