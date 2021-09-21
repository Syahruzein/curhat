<?php
	require 'koneksi.php';
	$user=$_POST['username'];
	$pass=$_POST['password'];

	$sql=mysqli_query($conn, "select * from mahasiswa where username='$user' and password='$pass'");
	$cek=mysqli_num_rows($sql);

	if ($cek>0)
	{
		$data=mysqli_fetch_array($sql);
		session_start();
		$_SESSION['nama']=$user;
		$_SESSION['nrp']=$data['nrp'];
		?>
		<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});

			Toast.fire({
				type: 'succes',
				title: 'Berhasil masuk'
			})
		</script>
		<?php
		header('location:mahasiswa.php');
	}
	else{
		?>
		<script type="text/javascript">
			alert ('Mohon maaf Username atau Password tidak ditemukan');
			window.location="index.php";
		</script>
	<?php
	}
	?>