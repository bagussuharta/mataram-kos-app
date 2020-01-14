<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- header -->
  <?php include('templates/head.php'); ?>

  <body>
    <!-- navbar -->
    <?php include('templates/navbar.php'); ?>

    <div class="container">
      <div class="row">
      <div class="col s2"></div>
      <div class="col s8">
        <div class="card" style="margin-top:50px;">
          <div class="card-content">
            <h4>Boking kos</h4>
            <hr style="width:50px;">
                          <table class="striped">
                    <thead>
                      <tr>
                          <th>Nama Kos</th>
                          <td>Kos pak kumis</td>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th>Alamat</th>
                        <td>Jl. Bunga Matahari, No.11 Gomong Lama</td>
                      </tr>
                      <tr>
                        <th>Tipe Kos</th>
                        <td>Tahunan</td>
                      </tr>
                      <tr>
                        <th>Harga Kos</th>
                        <td>Rp. 5.000.000</td>
                      </tr>
                      <tr>
                        <th>Nama Pemilik</th>
                        <td>Evan DImas</td>
                      </tr>
                      <tr>
                        <th>Nama Penyewa</th>
                        <td>Muhammad Kuswari</td>
                      </tr>
                      <tr>
                        <th>DP Kos</th>
                        <td>Rp. 2.500.000</td>
                      </tr>
                      <tr>
                        <th>Rekening Tujuan</th>
                        <td>BNI : 1291721921212</td>
                      </tr>
                    </tbody>
                  </table>
                  <hr>
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>File</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="upload bukti transfer">
                    </div>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
        
          </div>
        </div>
      </div>
      <div class="col s2"></div>
      </div>
    </div>

    <!-- footer -->
    <?php include('templates/footer.php'); ?>


    <!-- js -->
    <?php include('templates/js.php'); ?>

    </body>
  </html>
