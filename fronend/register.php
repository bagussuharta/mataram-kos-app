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
            <h4>Register now</h4>
            <hr style="width:50px;">
            <form action="" method="post">
              <div class="row">
                <form action="col s12">
                  <div class="input-field col s6">
                    <input id="name" type="text" class="validate">
                    <label for="name">Nama</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="email" type="text" class="validate">
                    <label for="email">E-Mail</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="nohp" type="number" class="validate">
                    <label for="nohp">No Hp</label>
                  </div>
                  <div class="input-field col s6">
                  <span class="helper-text">Jenis Kelamin</span>
                  <p>
                  <label>
                      <input name="jenis_kelamin" type="radio" checked />
                      <span>Laki-laki</span>
                    </label>
                    <label>
                      <input name="jenis_kelamin" type="radio" checked />
                      <span>Perempuan</span>
                    </label>
                    </p>
                  </div>
                  <div class="input-field col s12">
                    <textarea id="alamat" class="materialize-textarea"></textarea>
                    <label for="alamat">Alamat</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="username" type="text" class="validate">
                    <label for="username">Username</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="password" type="text" class="validate">
                    <label for="password">Password</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="password2" type="text" class="validate">
                    <label for="password2">Konfirmasi password</label>
                  </div>
                  <div class="aksi center">
                  <button class="btn waves-effect waves-light blue" type="submit" name="action" style="border-radius:50px;">daftar sekarang
                    <i class="material-icons right">send</i>
                  </button>
                  </div>
                </form>
              </div>
            </form>
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
