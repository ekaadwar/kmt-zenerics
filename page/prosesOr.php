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
			$sqlDaftar = "INSERT INTO pesertaOr (nama, nobp, email,
												fakultas, jurusan, tgl_lahir,
												tmp_lahir, gender, alamat,
												komputer, robotika, alasan,
												username
												) VALUES (
												'$nama', '$nobp', '$email',
												'$fakultas', '$jurusan', '$tgl_lahir',
												'$tmp_lahir', '$gender', '$alamat',
												'$komputer', '$robotika', '$alasan',
												email
												)";
			
			mysqli_query($conn, $sqlDaftar);
			$sqlId = "SELECT index FROM pesertaOr WHERE nobp='$nobp' ";
			$resultId = mysqli_query($conn, $sqlId);
			$dataId = mysqli_fetch_assoc($resultId);
			$id = $dataId['index'];
			$pass = 'peserta'.$id*13;

			$sqlPass = "UPDATE pesertaOr SET pass='$pass' WHERE index='$id' ";
			mysqli_query($conn, $sqlPass);

			?>
			<script type="text/javascript">
				alert("Data Anda telah terkirim. Silahkan cek email Anda untuk mendapatkan kode username dan password.");
				window.location.href = "?page=or";
			</script>
			<?php
		}		
	}
 ?>