<?php 

	if(isset($_GET['url']))
	{
		$url=$_GET['url'];

		switch ($url) {
			case 'buat_curhatan';
				include 'buat_curhatan.php';
				break;
			
			case 'lihat_curhatan';
				include 'lihat_curhatan.php';
				break;

			case 'detail_curhatan':
				include 'detail_curhatan.php';
				break;

			case 'lihat_tanggapan':
				include 'lihat_tanggapan.php';
				break;
		}
	}
	else
	{
		?>
		Selamat Datang di Curhatan Mahasiswa PENS (CumaPENS) yang dibuat untuk mencurahkan
		masalah ataupun uneg-uneg yang ingin disampaikan.<br><br>
		Anda Masuk Sebagai : <h2><b> <?php echo $_SESSION['nama'];?></b><?php
	}
 ?>