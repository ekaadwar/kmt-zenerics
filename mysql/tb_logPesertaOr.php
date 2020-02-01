<?php 
	include("koneksi.php");

	// check connection
	if(!$conn){
		die("Connection failed : ". mysqli_connect_error());
	}

	// sql to create table
	$sql = "CREATE TABLE `logpesertaor` 	( 	`id` INT(3) NOT NULL ,
												`username` VARCHAR(100) NOT NULL , 
												`password` VARCHAR(100) NOT NULL , 
												`waktu_edit` TIMESTAMP NOT NULL , 
												PRIMARY KEY (`index`)
											) ENGINE = InnoDB;";

	if(mysqli_query($conn, $sql)){
		echo "Table 'logPesertaOr' created successfully";
	}else{
		echo "Error creating table : ". mysqli_error($conn);
	}

	mysqli_close($conn);
 ?>