<?php
	require 'koneksi.php';
	$user=$_POST['username'];
	$pass=$_POST['password'];

	$sql=mysqli_query($conn, "select * from admin where username='$user' and password='$pass'");
	$cek=mysqli_num_rows($sql);

	if ($cek>0)
	{
		$data=mysqli_fetch_array($sql);
		if ($data['level']=="admin")
		{
			session_start();
			$_SESSION['id_admin']=$data['id_admin'];
			$_SESSION['user']=$user;
			$_SESSION['nama']=$data['nama_admin'];
			$_SESSION['level']=$data['level'];

			header('location:admin/admin.php');
		}
		else if ($data['level']=="petugas")
		{
			session_start();
			$_SESSION['user']=$user;
			$_SESSION['nama']=$data['nama_admin'];
			$_SESSION['level']=$data['level'];

			header('location:petugas/petugas.php');
		}
	}
	else{
		?>
		<script type="text/javascript">
			alert ('Mohon maaf Username atau Password tidak ditemukan');
			window.location="../curhat/indexAdmin.php";
		</script>
	<?php
	}
	?>