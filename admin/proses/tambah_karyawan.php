<?php 
	include '../../koneksi/koneksi.php';
	$kode = $_POST['kd_karyawan'];
	$nama = $_POST['nama'];
	$no_hp = $_POST['no_hp'];
	$bagian = $_POST['bagian'];
	$alamat = $_POST['alamat'];
	

	$result = mysqli_query($conn, "INSERT INTO karyawan VALUES('$kode','$nama','$no_hp', '$bagian', '$alamat')");

	if($result){
		echo "
			<script>
				alert('KARYAWAN BERHASIL DITAMBAHKAN');
				window.location = '../karyawan.php';
			</script>
		";
	}


 ?>