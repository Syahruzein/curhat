<?php
	require '../koneksi.php';

	$sql=mysqli_query($conn, "update curhatan set status='proses' where id_curhatan='$_GET[id]'");
	if($sql)
	{
		header('location:petugas.php?url=verifikasi_curhatan');
	}
?>