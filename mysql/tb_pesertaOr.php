<?php 
	include ("koneksi.php");

	// check connection
	if(!$conn){
		die("Connection failed : ". mysqli_connect_error());
	}

	// sql to create table
	$sql = "CREATE TABLE `pesertaOr` ( `id` INT(4) NOT NULL AUTO_INCREMENT ,
										 `nama` VARCHAR(50) NOT NULL , 
										 `nobp` VARCHAR(50) NOT NULL , 
										 `email` VARCHAR(50) NOT NULL , 
										 `fakultas` VARCHAR(100) NOT NULL , 
										 `jurusan` VARCHAR(100) NOT NULL , 
										 `tgl_lahir` VARCHAR(50) NOT NULL , 
										 `tmp_lahir` VARCHAR(50) NOT NULL , 
										 `gender` ENUM('Laki-laki','Perempuan') NOT NULL , 
										 `alamat` TEXT NOT NULL , 
										 `komputer` INT(1) NOT NULL , 
										 `robotika` INT(1) NOT NULL , 
										 `alasan` TEXT NOT NULL , 
										 `time` TIMESTAMP NOT NULL , 
										 PRIMARY KEY (`index`)
									) ENGINE = InnoDB;";
	if(mysqli_query($conn, $sql)){
		echo "Table `pesertaOr` created successfully";
	}else{
		echo "Error creating table : ". mysqli_error($conn);
	}

	mysqli_close($conn);
 ?>