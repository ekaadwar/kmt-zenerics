<?php 
	$sqlP = "SELECT * FROM pesertaor";
	$resultP = mysqli_query($conn, $sqlP);
 ?>
<a class="tombolLink" href="?page=or">Kembali</a>
<table>
	<tr>
		<th colspan="5">Data Peserta Open Recruitment</th>
	</tr>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>No. BP</th>
		<th>Jurusan</th>
	</tr>
	<?php 
		
		if(mysqli_num_rows($resultP)>0){
			$numData = mysqli_num_rows($resultP);
			$cadang = $numData + 20;
			$nomor = 1;
			for($i=1; $i<$cadang; $i++){
				$sqlOne = "SELECT nama, nobp, jurusan, gender FROM pesertaor WHERE id=$i";
				$resOne = mysqli_query($conn, $sqlOne);
				if(mysqli_num_rows($resOne)>0){
					$dataOne = mysqli_fetch_array($resOne);
					echo "<tr>";
						echo "<td>". $nomor. "</td>";
						echo "<td>". $dataOne['nama']. "</td>";
						echo "<td>". $dataOne['gender']. "</td>";
						echo "<td>". $dataOne['nobp']. "</td>";
						echo "<td>". $dataOne['jurusan']. "</td>";
					echo "</tr>";
					$nomor+=1;
				}
			}
		}
	 ?>
</table>