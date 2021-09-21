<?php
	require '../koneksi.php';

	$nama=$_POST['nama_admin'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$telp=$_POST['telp'];
	$level=$_POST['level'];
	$email=$_POST['email'];
	$id=$_POST['id_admin'];

	$sql=mysqli_query($conn, "update admin set nama_admin='$nama',username='$username',password='$password',telp='$telp',level='$level',email='$email' where id_admin='$id'");

	if($sql)
	{
		?>
		<script type="text/javascript">
			alert ('Data berhasil diubah');
			window.location='admin.php?url=lihat_admin';
		</script>
		<?php
	}
?>