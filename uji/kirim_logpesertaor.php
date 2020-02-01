<?php 
	include("../mysql/koneksi.php");

	//check connection
	if(!$conn){
		die("Connection failed : ". mysqli_connect_error(). "<br>");
	}else{
		echo "koneksi berhasil<br>";
	}
	$sqlLog = "INSERT INTO logpesertaor (index, username, password) VALUES ('500', 'yollo', 'asdas')";

	if(mysqli_query($conn, $sqlLog)){
		echo "ok<br>";
	}else{
		echo "oh no!<br>";
		echo "Error: " . $sqlLog . "<br>" . mysqli_error($conn);
	}

	/*
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
	?>
	*/

 ?>