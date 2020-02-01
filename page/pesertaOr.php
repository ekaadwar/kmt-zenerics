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
			while($dataP = mysqli_fetch_array($resultP)){
				echo "<tr>";
				echo "<td>". $dataP['id']. "</td>";
				echo "<td>". $dataP['nama']."</td>";
				echo "<td>". $dataP['gender']."</td>";
				echo "<td>". $dataP['nobp']."</td>";
				echo "<td>". $dataP['jurusan']."</td>";
				echo "</tr>";
			}
		}
	 ?>
</table>