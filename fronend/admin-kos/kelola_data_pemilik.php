<?php 
session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
require 'function/all_functions.php';
$pemilik = tampil_pemilik("SELECT * FROM pemilik");

// cek apakah tombol cari sudah ditekan
if(isset($_POST["cari"])){
  $pemilik = cari_pemilik($_POST["keyword"]);
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
        Kelola
        <small>Data Pemilik</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <a href="tambah_data_pemilik.php" class="btn btn-primary">Tambah Data Pemilik</a>

              <div class="box-tools">
              <form action="" method="POST">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="keyword" class="form-control pull-right" placeholder="Cari Pemilik" autofocus autocomplete="off" id="keyword">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default" name="cari" id="tombol-cari"><i class="fa fa-search"></i></button>
                  </div>
                </div>
                </form>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>NO KTP</th>
                  <th>FOTO KTP</th>
                  <th>AKSI</th>
                </tr>

                <?php $i = 1; ?>
                <?php foreach($pemilik as $p) : ?>

                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $p["Nama"]; ?></td>
                  <td><?= $p["No_ktp"]; ?></td>
                  <td>
                      <img src="img/pemilik/<?= $p["Foto"]; ?>" width="50">
                  </td>
                  <td>
                      <a href="edit_data_pemilik.php?id=<?= $p["Id_pemilik"]; ?>" class="btn-sm btn-info">Ubah</a><a href="hapus_data_pemilik.php?id=<?= $p["Id_pemilik"]; ?>" onclick="return confirm('anda yakin ingin menghapus?');" class="btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              </table>
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