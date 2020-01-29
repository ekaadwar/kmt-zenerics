<!DOCTYPE html>
<html>
<head>
	<title>KMT Zenerics</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="canvas">
		<div class="header">
			<img src="desain/header.png" width="1200px">
		</div>
		<div class="namebar">
			<a href="">Selamat datang, Pak Eka</a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="">BERITA</a></li>
				<li><a href="">STRUKTUR ORGANISASI</a></li>
				<li><a href="">OPEN RECRUITMENT</a></li>
				<li><a href="">PENGUMUMAN</a></li>
				<li class="kanan"><a href="">LOG OUT</a></li>
				<li class="kanan"><a href="">PROFIL</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="isi">
			<a class="tombolLink" href="pesertaOr.php">Lihat Data Peserta</a>
			<form>
				<table>
					<tr>
						<th colspan="3">
							Formulir Pendaftaran Open Recruitment
						</th>
					</tr>
					<tr>
						<td class="judul">Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" class="text"></td>
					</tr>
					<tr>
						<td class="judul">No.Bp</td>
						<td>:</td>
						<td><input class="text" type="text" name="nobp"></td>
					</tr>
					<tr>
						<td class="judul">E-mail</td>
						<td>:</td>
						<td><input class="text" type="email" name="email"></td>
					</tr>
					<tr>
						<td class="judul">Fakultas</td>
						<td>:</td>
						<td>
							<select name="fakultas" type="text">
								<option></option>
								<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="judul">Jurusan</td>
						<td>:</td>
						<td>
							<select name="jurusan" type="text">
								<option></option>
								<?php 
									$jurusan = array("Kimia", "Biologi", "Matematika", "Fisika");
									for($i=0; $i<4; $i++){
										echo "<option value='$jurusan[$i]'>$jurusan[$i]</option>";
									}
								 ?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="judul">Tanggal Lahir</td>
						<td>:</td>
						<td>
							<select name="tgl" type="number">
								<option>Tanggal</option>
								<?php 
									for($i=1; $i<=31; $i++){
										echo "<option value='$i'>$i</option>";
									}
								 ?>
							</select>
							<select name="bln" type="text">
								<option>Bulan</option>
								<?php 
									$bulan = array(
												"Januari", "Februari", "Maret", "April", "Mei", "Juni", 
												"Juli", "Agustus", "September", "Oktober", "November", "Desember"
											);
									for($i=0; $i<12; $i++){
										echo "<option value='$bulan[$i]'>$bulan[$i]</option>";
									}
								 ?>
							</select>
							<select name="thn" type="number">
								<option>Tahun</option>
								<?php 
									for($i=1990; $i<2020; $i++){
										echo "<option value='$i'>$i</option>";
									}
								 ?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="judul">Tempat Lahir</td>
						<td>:</td>
						<td><input class="text" type="text" name="tmp_lahir"></td>
					</tr>
					<tr>
						<td class="judul">Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="gender" value="Laki-laki">Laki-laki<br>
			  				<input type="radio" name="gender" value="Perempuan">Perempuan<br>
						</td>
					</tr>
					<tr>
						<td class="judul">Alamat Asal</td>
						<td>:</td>
						<td>
							<textarea name="alamat" type="text" >
							</textarea>
						</td>
					</tr>
					<tr>
						<td class="judul">Bidang Minat</td>
						<td>:</td>
						<td>
							<input type="checkbox" name="bidang1" value="Komputer">Komputer<br>
							<input type="checkbox" name="bidang2" value="Robotika">Robotika
						</td>
					</tr>
					<tr>
						<td class="judul">Alasan Masuk KMTZ</td>
						<td>:</td>
						<td>
							<textarea name="alamat" type="text" >
							</textarea>
						</td>
					</tr>
					<div class="clear"></div>
					<tr>
						<td colspan="3">
							<input class="tombol" type="submit" name="daftar" value="Daftar">
							<input class="tombol" type="reset" name="reset" value="Batal">
						</td>
					</tr>
					<div class="clear"></div>
				</table>
			</form>
		</div>
		<div class="footer">
			<table>
				<tr>
					<td>Alamat</td>
					<td>.</td>
				</tr>
				<tr>
					<td><a href="">Facebook</a></td>
					<td class="maker"><a href="">created by : Eka Fajhari Adwar</a></td>
				</tr>
				<tr>
					<td><a href="">Instagram</a></td>
					<td class="maker">ZNS.002/GNR</td>
				</tr>
			</table>
		</div>	
	</div>
</body>
</html>