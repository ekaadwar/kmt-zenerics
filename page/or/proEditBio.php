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
			$sqlUbah = "UPDATE pesertaor SET nama='$nama', nobp='$nobp', email='' "
			
			mysqli_query($conn, $sqlDaftar);
			
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

			$sqlInsUser = "UPDATE `pesertaor` SET `username` = '$email', `password` = '$pass' WHERE `pesertaor`.`id` = $id;";

			$result = mysqli_query($conn, $sqlInsUser);

			if($result){
				echo "Data 1 telah ditambahkan";
			}else{
				echo "Error : ". $sqlUser. "<br>". mysqli_error($conn);
			}

			?>
			<script type="text/javascript">
				alert("Data Anda telah terkirim. Silahkan cek email Anda untuk mendapatkan kode username dan password.");
				window.location.href = "?page=or";
			</script>
			<?php
		}		
	}
 ?>