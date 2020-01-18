<?php 
session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
require 'function/all_functions.php';
// cek apakah tombol tambah sudah ditekan
if(isset($_POST["submit"])){
  // cek apakah data berhasil ditambah
  if(tambah_pemilik($_POST) > 0){
    echo "
      <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'kelola_data_pemilik.php';
      </script>
    ";
  }else{
    echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'kelola_data_pemilik.php';
			</script>
		";
  }
}

?>
<!DOCTYPE html>

<html>
<!-- head -->
<?php include('templates/head.php'); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- topbar -->
  <?php include('templates/topbar.php'); ?>
  
  <!-- sidebar -->
  <?php include('templates/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah
        <small>Data Pemilik</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="nama">Nama Pemilik</label>
                    <input type="text" name="Nama" class="form-control" id="nama" placeholder="Masukkan Nama Pemilik">
                  </div>
                  <div class="form-group">
                    <label for="no_ktp">No KTP</label>
                    <input type="text" name="No_ktp" class="form-control" id="no_ktp" placeholder="Masukkan No KTP">
                  </div>
                  <div class="form-group">
                    <label for="foto_ktp">Foto KTP</label>
                    <input type="file" name="Foto" id="foto_ktp">
                    <p>Hanya menerima *.jpg dan *.png</p>
                  </div>
                  <div class="form-action">
                    <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
                    <button type="reset" class="btn btn-danger">Batalkan</button>
                  </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include('templates/footer.php'); ?>

</div>
<!-- ./wrapper -->

<!-- javascript -->
<?php include('templates/js.php'); ?>

</body>
</html>