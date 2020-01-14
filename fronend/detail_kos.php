<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- head -->
  <?php include('templates/head.php'); ?>

  <body>
    <!-- navbar -->
    <?php include('templates/navbar.php'); ?>

    <div class="container">
      <h4>Detail dan pemesanan</h4>
      <hr>
      <div class="row">
        <div class="col s6">
          <div class="card">
              <img class="materialboxed" width="100%" height="312px" src="img/kos/1.jpg">
          </div>
          <div class="card">
              <div id="googleMap" style="width:100%;height:312px;"></div>
          </div>
        </div>
        <div class="col s6">
          <div class="card">
            <div class="card-content">
              <h4>Detail Kos</h4>
              <table class="striped">
                    <thead>
                      <tr>
                          <th>Nama</th>
                          <td>Kos pak kumis</td>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th>Pemilik</th>
                        <td>Muhammad Kuswari</td>
                      </tr>
                      <tr>
                        <th>Kategori</th>
                        <td>Putra</td>
                      </tr>
                      <tr>
                        <th>Fasilitas</th>
                        <td>Kasur, Lemari, Wifi, Kamar mandi dalam.</td>
                      </tr>
                      <tr>
                        <th>Jenis Kos</th>
                        <td>Tahunan.</td>
                      </tr>
                      <tr>
                        <th>Harga</th>
                        <td>Rp. 5.500.000</td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td>Jl. Airlangga, No.15</td>
                      </tr>
                      <tr>
                        <th>Kampus Terdekat</th>
                        <td>UIN Mataram</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="action center" style="margin-top: 25px;">
                  <a class="waves-effect waves-light btn-small orange" style="border-radius: 25px;" href=""><i class="material-icons left">chat</i>hubungi pemilik</a>
                  <a class="waves-effect waves-light btn-small blue" style="border-radius: 25px;" href="boking.php"><i class="material-icons left">add_shopping_cart</i>boking kos</a>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include('templates/footer.php'); ?>

    <!-- js -->
    <?php include('templates/js.php'); ?>

  </body>
</html>
