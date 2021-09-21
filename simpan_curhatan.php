<?php
	require 'koneksi.php';

	$tgl=date('Y/m/d');
	$nrp=$_POST['nrp'];
	$isi=$_POST['isi_curhatan'];
	$ft=$_FILES['foto']['name'];
	$file=$_FILES['foto']['tmp_name'];
	$st=0;

	$sql=mysqli_query($conn, "insert into curhatan(tgl_curhatan,nrp,isi_curhatan,foto,status) values('$tgl','$nrp','$isi','$ft','$st')");
	move_uploaded_file($file, "foto/".$ft);

	if ($sql)
	{
		?>
		<script type="text/javascript">
			alert ('Data Berhasil Disimpan, Terimakasih sudah menyampaikan curhatannya:)');
			window.location="mahasiswa.php";
		</script>
	<?php
	}
?>