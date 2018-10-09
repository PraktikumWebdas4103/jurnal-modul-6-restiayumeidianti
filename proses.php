<?php
	$hostname  = "localhost";
	$username = "root";
	$pass     = "";
	$db       = "datamahasiswa";
	$con     = new mysqli($hostname, $username, $pass, $db);

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}
		if (isset($_POST['submit'])) {
			$nim=$_POST['nim'];
			$nama=$_POST['nama'];
			$kelas=$_POST['kelas'];
			$fakultas=$_POST['fakultas'];
			$progstud=$_POST['studi'];
			$jenisk=$_POST['jeniskelamin'];
			$hobi=implode(", ", $_POST['hobi']);
			$alamat=$_POST['alamat'];
	
	$sql="INSERT INTO mahasiswa(nim,nama,kelas,fakultas,studi,jeniskelamin,hobi,alamat) 
	VALUES ('$nim','$nama','$kelas','$fakultas','$progstud','$jenisk','$hobi','$alamat')";
	if(mysqli_query($con,$sql)){
		echo "Database done";
	}else{
		die(mysqli_error($con));
	}
}
	?>