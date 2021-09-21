<?php
	require '../koneksi.php';

	$nama=$_POST['nama_admin'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$telp=$_POST['telp'];
	$level=$_POST['level'];
	$email=$_POST['email'];

	$sql=mysqli_query($conn, "insert into admin(nama_admin,username,password,telp,level,email) values('$nama','$username','$password','$telp','$level','$email')");

	if($sql)
	{
		?>
		<script type="text/javascript">
			alert ('Data berhasil disimpan');
			window.location='admin.php?url=lihat_admin';
		</script>
		<?php
	}
?>