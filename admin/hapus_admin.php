<?php
	require '../koneksi.php';
	$id=$_GET['id'];

	$sql=mysqli_query($conn, "delete from admin where id_admin='$id'");

	if($sql)
	{
		?>
		<script type="text/javascript">
			alert('Data berhasil dihapus');
			window.location='admin.php?url=lihat_admin';
		</script>
		<?php
	}
?>