<?php 

session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'function/all_functions.php';
$kos = tampil_kos("SELECT * FROM kos JOIN pemilik ON kos.Id_pemilik=pemilik.Id_pemilik");

// cek apakah tombol cari sudah ditekan
if(isset($_POST["cari"])){
  $kos = cari_kos($_POST["keyword"]);
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
        <small>Data Kos</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <a href="tambah_data_kos.php" class="btn btn-primary">Tambah Data Kos</a>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" name="cari" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>KATEGORI</th>
                  <th>FASILITAS</th>
                  <th>JENIS</th>
                  <th>BIAYA</th>
                  <th>ALAMAT</th>
                  <th>GAMBAR</th>
                  <th>KAMPUS TERDEKAT</th>
                  <th>PEMILIK</th>
                  <th>AKSI</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($kos as $k) : ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $k["Nama_kos"]; ?></td>
                  <td><?= $k["Kategori"]; ?></td>
                  <td><?= $k["Fasilitas"]; ?></td>
                  <td><?= $k["Jenis_kos"]; ?></td>
                  <td><?= $k["Harga"]; ?></td>
                  <td><?= $k["Alamat"]; ?></td>
                  <td>
                      <img src="img/kosan/<?= $k["Gambar"]; ?>" width="50">
                  </td>
                  <td><?= $k["Kampus_terdekat"]; ?></td>
                  <td><?= $k["Nama"]; ?></td>
                  <td>
                      <a href="edit_data_kos.php?id=<?= $k["Id_kos"]; ?>" class="btn-sm btn-info">Ubah</a><a href="hapus_data_kos.php?id=<?= $k["Id_kos"]; ?>" onclick="return confirm('Yakin ingin menghapus?');" class="btn-sm btn-danger">Hapus</a>
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