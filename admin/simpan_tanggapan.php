<?php
	require '../koneksi.php';

	$id_curhatan=$_POST['id_curhatan'];
	$tgl=$_POST['tgl_tanggapan'];
	$tanggapan=$_POST['tanggapan'];
	$id_admin=$_POST['id_admin'];
	$status='selesai';

	$sql=mysqli_query($conn, "insert into tanggapan(id_curhatan,tgl_tanggapan,tanggapan,id_admin) values('$id_curhatan','$tgl','$tanggapan','$id_admin')");
	$update_status=mysqli_query($conn, "update curhatan set status='$status' where id_curhatan='$id_curhatan' ");

	if($sql)
	{
		?>
		<script type="text/javascript">
	      alert ('Data berhasil ditanggapi');
	      window.location="admin.php?url=verifikasi_curhatan";
	    </script>
	    <?php
	}
?>