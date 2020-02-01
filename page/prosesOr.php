<?php 
	$nama 		= @$_POST['nama'];
	$nobp 		= @$_POST['nobp'];
	$email 		= @$_POST['email'];
	$fakultas 	= @$_POST['fakultas'];
	$jurusan 	= @$_POST['jurusan'];
	$tgl 		= @$_POST['tgl'];
	$bln 		= @$_POST['bln'];
	$thn 		= @$_POST['thn'];
	$tgl_lahir 	= @"$tgl $bln $thn";
	$tmp_lahir	= @$_POST['tmp_lahir'];
	$gender 	= @$_POST['gender'];
	$alamat 	= @$_POST['alamat'];
	
	$bidang1 	= @$_POST['bidang1'];
	if($bidang1==""){
		$komputer = 0;
	}else{
		$komputer = 1;
	}
	
	$bidang2 	= @$_POST['bidang2'];
	if($bidang2 == ""){
		$robotika = 0;
	}else{
		$robotika = 1;
	}
	
	$alasan 	= @$_POST['alasan'];
	$daftar		= @$_POST['daftar'];

	if($daftar){
		if($nama=="" || $nobp=="" || $email=="" || $fakultas=="" || $jurusan=="" || $tmp_lahir=="" || $gender=="" || $alamat=="" || $alasan=="" ){
			?>
			<script type="text/javascript">
				alert("Data tidak boleh kosong!");
			</script>
			<?php
		}else{
			include "mysql/koneksi.php";
			$sqlDaftar = "INSERT INTO pesertaor (nama, nobp, email,
												fakultas, jurusan, tgl_lahir,
												tmp_lahir, gender, alamat,
												komputer, robotika, alasan
												) VALUES (
												'$nama', '$nobp', '$email',
												'$fakultas', '$jurusan', '$tgl_lahir',
												'$tmp_lahir', '$gender', '$alamat',
												'$komputer', '$robotika', '$alasan'
												)";
			
			mysqli_query($conn, $sqlDaftar);
			$sqlId = "SELECT * FROM pesertaor WHERE nobp='$nobp' ";
			$resultId = mysqli_query($conn, $sqlId);

			if (mysqli_num_rows($resultId) > 0) {
			     // output data of each row
			     while($row = mysqli_fetch_assoc($resultId)) {
			        $id = $row["id"];
					$pass = 'peserta'.$id*13;
			     }
			} else {
			     echo "0 results";
			}

			echo "<br>\$id = $id<br>";
			echo "\$pass = $pass<br>";

			//$sqlPass = "UPDATE pesertaor SET password='$pass' WHERE index='$id' ";
			//$sqlPass = "INSERT INTO pesertaor (password) VALUES ('$pass') WHERE indek='$id'";
			//mysqli_query($conn, $sqlPass);

			$sqlLog = "INSERT INTO logpesertaor (id, username, password) VALUES ('$id', '$email', '$pass') ";

			mysqli_query($conn, $sqlLog);

			?>
			<script type="text/javascript">
				alert("Data Anda telah terkirim. Silahkan cek email Anda untuk mendapatkan kode username dan password.");
				//window.location.href = "?page=or";
			</script>
			<?php
		}		
	}
 ?>