<?php 
include 'header.php';

// generate kode material
	$kode = mysqli_query($conn, "SELECT kode_karyawan from karyawan order by kode_karyawan desc");
	$data = mysqli_fetch_assoc($kode);
	

?>


<div class="container">
	<h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Tambah Karyawan</b></h2>

	<form action="proses/tambah_karyawan.php" method="POST">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Kode Karyawan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Lengkap" name="kd_karyawan">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Karyawan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Lengkap" name="nama">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">No HP</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No HP atau WA" name="no_hp">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Bagian</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contoh : Staf Pembayaran atau Gudang" name="bagian">
						<p class="help-block">Disesuaikan</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Alamat Lengkap" name="alamat">
				</div>
			</div>
		</div>
		<button type="submit"  class="btn btn-success" ><i class="glyphicon glyphicon-plus-sign"></i> Tambah</button>
		<a href="karyawan.php" class="btn btn-danger">Cancel</a>
	</form>
</div>

<br>

</div>
</form>

</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
include 'footer.php';
?>