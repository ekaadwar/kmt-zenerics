<?php 
	$nama 		= @$_POST['nama'];
	$nobp 		= @$_POST['nobp'];
	$email 		= @$_POST['email'];
	$fakultas 	= @$_POST['fakkultas'];
	$jurusan 	= @$_POST['jurusan'];
	$tgl 		= @$_POST['tgl'];
	$bln 		= @$_POST['bln'];
	$thn 		= @$_POST['thn'];
	$tgl_lahir 	= @"$tgl $bln $thn";
	$tmp_lahir	= @$_POST['tmp_lahir'];
	$gender 	= @$_POST['gender'];
	$alamat 	= @$_POST['alamat'];
	$bidang1 	= @$_POST['bidang1'];
	$bidang2 	= @$_POST['bideng2'];
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
			echo "data telah terkirim";	
		}		
	}
 ?>