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
	$bidang2 	= @$_POST['bidang2'];
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
			echo "data telah terkirim<br>";	
		}		
	}

	/*
	echo "nama = ".$nama."<br>";
	echo "nobp = ".$nobp."<br>";
	echo "email = ".$email."<br>";
	echo "fakultas = ".$fakultas."<br>";
	echo "jurusan = ".$jurusan."<br>";
	echo "tgl = ".$tgl."<br>";
	echo "bln = ".$bln."<br>";
	echo "thn = ".$thn."<br>";
	echo "tgl_lahir = ".$tgl_lahir."<br>";
	echo "tmp_lahir = ".$tmp_lahir."<br>";
	echo "gender = ".$gender."<br>";
	echo "alamat = ".$alamat."<br>";
	echo "bidang1 = ".$bidang1."<br>";
	echo "bidang2 = ".$bidang2."<br>";
	echo "alasan = ".$alasan."<br>";
	echo "daftar = ".$daftar."<br>";
	*/
 ?>