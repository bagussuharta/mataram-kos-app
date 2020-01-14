<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- header -->
  <?php include('templates/head.php'); ?>

  <body>
    <!-- navbar -->
    <?php include('templates/navbar.php'); ?>

    <div class="container">
      <div class="row">
      <div class="col s3"></div>
      <div class="col s6">
        <div class="card" style="margin-top:50px;">
          <div class="card-content">
            <h4>Login</h4>
            <hr style="width:50px;">
            <form action="" method="post">
              <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="username" id="username" class="validate">
                <label for="username">Username</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">https</i>
                <input type="password" name="password" id="password" class="validate">
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" checked="checked" />
                    <span>Remember Me</span>
                  </label>
                </p>
              </div>
              <div class="input-field">
                <button class="btn waves-effect waves-light blue" type="submit" name="action" style="width:100%; border-radius:50px;">login
                  <i class="material-icons right">send</i>
                </button>
              </div>
              <p class="center">Tidak punya akun? <a href="register.php">daftar disini<a></p>
            </form>
          </div>
        </div>
      </div>
      <div class="col s3"></div>
      </div>
    </div>

    <!-- footer -->
    <?php include('templates/footer.php'); ?>


    <!-- js -->
    <?php include('templates/js.php'); ?>

    </body>
  </html>
