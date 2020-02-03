<?php 
	$kode = $_GET['kode'];
	
	$sqlData = "SELECT nama FROM pesertaor WHERE id=$kode";
	$resData = mysqli_query($conn, $sqlData);
	if(mysqli_num_rows($resData)>0){
		$data = mysqli_fetch_array($resData);
		if(!$data){
			echo "data gagal di ambil";
		}else{
			$sqlHps = "DELETE FROM `pesertaor` WHERE `id` = $kode";
			$resHps = mysqli_query($conn, $sqlHps);

			//check sql hapus
			if($resHps){
				?>
					<script type="text/javascript">
						alert("Data peserta atas nama <?php echo $data['nama']; ?> telah dihapus.");
						window.location.href="?page=or&action=pesertaOr";
					</script>
				<?php
			}
		}
	}		
 ?>