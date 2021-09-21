<?php 

	if(isset($_GET['url']))
	{
		$url=$_GET['url'];

		switch ($url) {
			case 'verifikasi_curhatan';
				include 'verifikasi_curhatan.php';
				break;
			
			case 'tanggapan_curhatan';
				include 'tanggapan_curhatan.php';
				break;

			case 'detail_curhatan':
				include 'detail_curhatan.php';
				break;

			case 'lihat_mahasiswa':
				include 'lihat_mahasiswa.php';
				break;

			case 'lihat_admin':
				include 'lihat_admin.php';
				break;

			case 'tambah_admin':
				include 'tambah_admin.php';
				break;

			case 'edit_admin':
				include 'edit_admin.php';
				break;
		}
	}
	else
	{
		?>
		Selamat Datang di Curhatan Mahasiswa PENS (CumaPENS) yang dibuat untuk mencurahkan
		masalah ataupun uneg-uneg yang ingin disampaikan.<br><br>
		Anda Masuk Sebagai : <h2><b> <?php echo $_SESSION['nama'];?></b><?php

		require '../koneksi.php';
		$sql=mysqli_query($conn, "select * from curhatan where status='proses'");
		if ($cek=mysqli_num_rows($sql))
		?>

		<br>
		<br>
		<div class="col-xl-5 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                  	Laporan Curhatan : 
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                  	Ada <?php echo $cek; ?> curhatan dari Mahasiswa
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comment-dots fa-2x text-gray-300"></i>
                  <span class="badge badge-danger badge-counter" style="font-size: 1.4rem;">
                  	<?php echo $cek; ?>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
	}
 ?>