<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Balitress - Vacation & Enjoy the Trip</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/admin") ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url("assets/admin") ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/admin") ?>/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url("/") ?>" class="h1 text-primary"><span class="text-dark"><b>Balitre</span>ss</b></a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="<?= base_url("login/pros_register") ?>" method="post">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="reqfullname" required>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="reqemail" required>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="reqpassword" required>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>           
            <div class="input-group mb-3">
              <input type="date" class="form-control" name="reqdatebirth" required>
              <div class="input-group-append">
                  <div class="input-group-text">
                  <span class="	fas fa-calendar-alt"></span>
                  </div>
              </div>
            </div>
            <div class="row">          
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>        
                <!-- /.col -->
            </div>
        </form>      
        <a href="<?= base_url("login") ?>" class="text-center">I already have a membership</a>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url("assets/admin") ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("assets/admin") ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/admin") ?>/js/adminlte.min.js"></script>
</body>
</html>
