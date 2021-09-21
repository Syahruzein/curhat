<?php
	require '../koneksi.php';
	$nrp=$_GET['nrp'];

	$sql=mysqli_query($conn, "delete from mahasiswa where nrp='$nrp'");

	if($sql)
	{
		?>
		<script type="text/javascript">
			alert('Data berhasil dihapus');
			window.location='admin.php?url=lihat_mahasiswa';
		</script>
		<?php
	}
?>