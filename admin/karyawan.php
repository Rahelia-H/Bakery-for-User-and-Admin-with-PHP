<?php 
include 'header.php';

if(isset($_GET['cek'])){
	$cek = $_GET['cek'];
	mysqli_query($conn, "UPDATE produksi SET cek = '$cek'");
}

if(isset($_GET['page'])){
	$kode = $_GET['kode'];
	$result = mysqli_query($conn, "DELETE FROM karyawan WHERE kode_karyawan = '$kode'");

	if($result){
		echo "
		<script>
		alert('KARYAWAN BERHASIL DIHAPUS');
		window.location = 'karyawan.php';
		</script>
		";
	}
}

?>


<div class="container">
	<h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Data Karyawan</b></h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Kode Karyawan</th>
				<th scope="col">Nama</th>
				<th scope="col">No HP</th>
				<th scope="col">Bagian</th>
				<th scope="col">Alamat</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$result = mysqli_query($conn, "SELECT * FROM karyawan order by kode_karyawan asc");
			$no =1;
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>

					<th scope="row"><?php echo $no; ?></th>
					<td><?= $row['kode_karyawan'];  ?></td>
					<td><?= $row['nama'];  ?></td>
					<td><?= $row['no_hp'];  ?></td>
					<td><?= $row['bagian'];  ?></td>
					<td><?= $row['alamat'];  ?></td>
					<td><a href="karyawan.php?kode=<?php echo $row['kode_karyawan'];?>&page=del" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ?')"><i class="glyphicon glyphicon-trash"></i> </a></td>
				</tr>
				<?php 
				$no++;
			}
			?>
		</tbody>
	</table>
	<a href="tm_karyawan.php" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Karyawan</a>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
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