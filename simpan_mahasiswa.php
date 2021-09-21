<?php
	require 'koneksi.php';
	$nrp=$_POST['nrp'];
	$nama=$_POST['nama'];
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$telp=$_POST['telp'];
	$email=$_POST['email'];

	$sql=mysqli_query($conn, "insert into mahasiswa values('$nrp','$nama','$user','$pass','$telp','$email')");
	if ($sql)
	{
		?>
		<script type="text/javascript">
			alert ('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
			window.location="index.php";
		</script>
	<?php
	}
	?>