<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <div class="card shadow">
    <div class="card-header">
        <div class="col-sm-12">
          Tanggapan Curhatan
        </div>
    </div>

    <div class="card-body">

      <div class="col-sm-12" style="margin-bottom: 1rem;"> 
        <a href="?url=verifikasi_curhatan" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
          </span>
          <span class="text">Kembali</span>
        </a>
      </div>

      <form action="simpan_tanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">

        
        <div class="form-group col-sm-12">
          <label>ID Curhatan</label>
          <input type="text" name="id_curhatan" value="<?php echo $_GET['id']; ?>" class="form-control" readonly>
        </div>

        <div class="form-group col-sm-12">
          <label>Tanggal Tanggapan</label>
          <input type="text" name="tgl_tanggapan" value="<?php echo date('d-m-Y'); ?>" class="form-control" readonly>
        </div>

        <div class="form-group col-sm-12">
          <label >Buat Tanggapan</label>
          <textarea class="form-control" name="tanggapan" rows="7" style="text-align: left;">
          </textarea>
        </div>

        <div class="form-group col-sm-12">
          <label>ID Petugas</label>
          <input type="text" name="id_admin" value="<?php echo $_SESSION['id_admin'] ?>" class="form-control" readonly>
        </div>

        <div class="form-group col-sm-12">
          <input type="submit" class="btn btn-primary btn-user" value="Tanggapi" style="width: 8rem;">
        </div>

      </form>        
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>