<?php 

session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'function/all_functions.php';
// tampilkan pemilik di combobox
$pemilik = tampil_pemilik("SELECT Id_pemilik, Nama FROM pemilik");

// get data from url
$idKos = $_GET["id"];

// query data kos
$kosan = tampil_kos("SELECT * FROM kos WHERE Id_kos = $idKos")[0];

// cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"])){
    // cek apakah data berhasil diubah atau tidak
    if(ubah_kos($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'kelola_data_kos.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'kelola_data_kos.php';
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
        <small>Data Kos</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="Id_kos" value="<?= $kosan["Id_kos"]; ?>">
                <input type="hidden" name="gambarLama" value="<?= $kosan["Gambar"]; ?>">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nama">Nama Kos</label>
                            <input type="text" name="Nama_kos" class="form-control" id="nama" placeholder="Masukkan Nama Kos" value="<?= $kosan["Nama_kos"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <select class="form-control" name="Kategori">
                                <option value="Pilih" disabled selected>--PILIH--</option>
                                <option value="Bulanan">Bulanan</option>
                                <option value="Tahunan">Tahunan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fasilitas">Fasilitas</label>
                            <input type="text" name="Fasilitas" class="form-control" id="fasilitas" placeholder="Tuliskan Fasilitas Tersedia" value="<?= $kosan["Fasilitas"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kos</label>
                            <select class="form-control" name="Jenis_kos">
                                <option value="Pilih" disabled selected>--PILIH--</option>
                                <option value="Putra">Putra</option>
                                <option value="Putri">Putri</option>
                                <option value="Campus">Campur</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="Harga" class="form-control" id="harga" placeholder="Masukkan harga" value="<?= $kosan["Harga"]; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="alamat">Alamat Kos</label>
                            <textarea class="form-control" name="Alamat" rows="3" placeholder="Masukkan Alamat"><?= $kosan["Alamat"]; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <br>
                            <img src="img/kosan/<?= $kosan["Gambar"]; ?>" width="200">
                            <br><br>
                            <input type="file" name="Gambar" id="gambar">
                            <p>Hanya menerima *.jpg dan *.png</p>
                        </div>
                        <div class="form-group">
                            <label for="kampus_terdekat">Kampus Terdekat</label>
                            <select class="form-control" name="Kampus_terdekat" id="kampus_terdekat">
                                <option value="" disabled selected>--PILIH--</option>
                                <option value="Universitas Mataram">Universitas Mataram</option>
                                <option value="UIN Mataram">UIN Mataram</option>
                                <option value="Universitas Bumigora">Universitas Bumigora</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_pemilik">Pemilik</label>
                            <select class="form-control" name="Id_pemilik" id="nama_pemilik">
                                <option value="" disabled selected>--PILIH--</option>
                                <?php foreach($pemilik as $p) : ?>
                                <option value="<?= $p["Id_pemilik"] ?>" ><?= $p["Nama"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-action">
                            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
                            <a href="" class="btn btn-danger">Batalkan</a>
                        </div>
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