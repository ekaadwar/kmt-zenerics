<?php 
	$kode = $_GET['kode'];
	$sqlLengkap = "SELECT * FROM pesertaor WHERE id=$kode";
	$resLengkap = mysqli_query($conn, $sqlLengkap);
	$dataLengkap = mysqli_fetch_array($resLengkap);
 ?>

<a class="tombolLink" href="?page=or&action=pesertaOr">Kembali</a><br>
<table>
	<tr>
		<th class="head" colspan=4>Data Peserta Open Recruitment</th>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $dataLengkap['nama'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>No. BP</td>
		<td>:</td>
		<td><?php echo $dataLengkap['nobp'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>E-Mail</td>
		<td>:</td>
		<td><?php echo $dataLengkap['email'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><?php echo $dataLengkap['jurusan'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td>:</td>
		<td><?php echo $dataLengkap['fakultas'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $dataLengkap['tgl_lahir'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><?php echo $dataLengkap['tmp_lahir'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $dataLengkap['gender'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>Alamat Asal</td>
		<td>:</td>
		<td><?php echo $dataLengkap['alamat'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>Bidang yang Diminati</td>
		<td>:</td>
		<td>-</td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
	<tr>
		<td>Alasan Masuk KMT Zenerics</td>
		<td>:</td>
		<td><?php echo $dataLengkap['alasan'] ?></td>
		<td><a class="tombolLink" href="">Edit</a></td>
	</tr>
</table>