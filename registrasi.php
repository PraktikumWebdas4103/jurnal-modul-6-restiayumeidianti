<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<center>
		<h2><p>Registrasi Mahasiswa</p></h2>
	<form action="proses.php" method="POST">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" required=""></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="radio" name="kelas" value="D3MI 41-01">D3MI 41-01</td>
				<td><input type="radio" name="kelas" value="D3MI 41-02">D3MI 41-02</td><br>
				<td><input type="radio" name="kelas" value="D3MI 41-03">D3MI 41-03</td><br>
				<td><input type="radio" name="kelas" value="D3MI 41-04">D3MI 41-04</td><br>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="FTE">Fakultas Teknik Elektro</option>
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FEB">Fakultas Ekonomi Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    			</select>
    			</td>
    		</tr>
			<tr>
				<td>Program Studi</td>
				<td>
				<select name="studi" required="">
    				<option value="Sistem Informasi">Sistem Informasi</option>
    				<option value="Teknologi Komputer">Teknologi Komputer</option>
    				<option value="Teknik Informatika">Teknik Informatika</option>
    				<option value="Rekayasa Perangkat Lunak Aplikasi">Rekayasa Perangkat Lunak Aplikasi</option>
    				<option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
    				<option value="Manajemen Informatika">Manajemen Informatika</option>
    				<option value="Perhotelan">Perhotelan</option>
    				<option value="Teknologi Telekomunikasi">Teknologi Telekomunikasi</option>
    				<option value="Sistem Informasi Akuntansi">Sistem Informasi Akuntansi</option>
    				<option value="Teknik Industri">Teknik Industri</option>
    				<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
    				
				</select></td>
				<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jeniskelamin" value="Male" required="">Male<br></td>
				<td><input type="radio" name="jeniskelamin" value="Female">Female<br></td>
			</tr>
			</tr>
			<tr>
				<td><b>Hobi</b></td>
			<td>
				<input type="checkbox" name="hobi[]" value="Tidur">Tidur <br>
				<input type="checkbox" name="hobi[]" value="Drama">Drama 
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Menari">Menari<br>
				<input type="checkbox" name="hobi[]" value="Membaca">Membaca
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Main">Main<br>
				<input type="checkbox" name="hobi[]" value="Traveling">Traveling
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
				<input type="checkbox" name="hobi[]" value="Other Hobby">Dan lain-lain
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> <input type="textarea" name="alamat"</td>
		</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$kelas=$_POST['Kelas'];
		$fakultas=$_POST['fakultas'];
		$progstud=$_POST['studi'];
		$jenisk=$_POST['jeniskelamin'];
		$hobi=$_POST['hobi'];
		$alamat=$_POST['alamat'];
		$jumlahobi=count($hobi);

		for($x=0;$x<$jumlahob;$x++){
			mysql_query("insert into data values('','$hobi[$x]')");
		}

		$error=array();
		if(strlen($_POST['nim']) != 10){
			$error['nim']=="Harus 10";
		} if(strlen($_POST['nama']) <= 25){
			$error['nama']=="Harus 25";
		} if(empty($kelas)){
			$error['kelas']=="Email harus diisi";
		}if(empty($progstud)){
			$error['studi']=="Program Studi harus diisi";
		}if(empty($jenisk)){
			$error['jeniskelamin']=="Jenis Kelamin harus diisi";
		}if(empty($hobi)){
			$error['hobi']=="Hobby harus diisi";
		}if(empty($alamat)){
			$error['alamat']=="Foto harus diisi";
		}
}
?>

	