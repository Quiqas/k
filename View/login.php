<?php 

session_start();

if (isset($_SESSION['user_id'])) {
    Header("Location: /modelo/home");
}else{
  if(isset($_POST['submit'])){

    include_once 'static/connection.php';


    $Password = mysqli_real_escape_string($connection, $_POST['Password']);
    $Username = mysqli_real_escape_string($connection, $_POST['Username']);

    $sql = "SELECT * FROM usuarios WHERE user_nickname = ? OR user_email = ?";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "SQL Error";
    }else{
      mysqli_stmt_bind_param($stmt, "ss", $Username, $Email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $resultcheck = mysqli_num_rows($result);
    }

    if($resultcheck < 1){
        echo '<div class="col-md-3">
            <div class="box box-danger box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Error</h3>

                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" type="button" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                No se encontro el Usuario o el Email.
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>';
    }else{
      if ($row = mysqli_fetch_assoc($result)) {
          //Desencriptando Contraseña
          $decriptpass = password_verify($Password, $row['user_password']);
          if (!$decriptpass) {
            echo '<div class="col-md-3">
            <div class="box box-danger box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Error</h3>

                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" type="button" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                La contraseña no coincide con el nombre de usuario o email.
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>';
          }elseif ($decriptpass){
              //Log in
              $_SESSION['user_id'] = $row['user_id'];
              $_SESSION['user_name'] = $row['user_name'];
              $_SESSION['user_email'] = $row['user_email'];
              $_SESSION['user_nickname'] = $row['user_nickname'];
              $_SESSION['user_age'] = $row['user_age'];
              $_SESSION['user_date'] = $row['user_date_register'];
              $_SESSION['user_type'] = $row['user_type'];

              $connection->close();
              Header("Location: /TDAH/home");
              exit();
          }
      }
    }
  }
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Only Code | Log in</title>

  <link rel="shortcut icon" type="image/x-icon" href="assets/images/Icono.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/dist/css/Custom.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=$GLOBALS['COD']->dir?>/"><img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/Logo2.png" class=" responsive Logo-Code-Main" alt="Logo Only Code"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in para iniciar sesión</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="Username" required pattern="[A-Za-z0-9_-]{1,20}" title="De Ocho o veinte caracteres, Caracteres Permitidos: A-Za-z0-9_-" placeholder="Username/Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="Password" required placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <center>
              <label>
                <input type="checkbox"> Recuérdame
              </label>
          </center>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Entra usando
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Entra usando
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">Olvide mi contraseña</a><br>
    <a href="<?=$GLOBALS['COD']->dir?>/registro" class="text-center">Registrarse</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?=$GLOBALS['COD']->dir?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=$GLOBALS['COD']->dir?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=$GLOBALS['COD']->dir?>/assets/plugins/iCheck/icheck.min.js"></script>

<script src="<?=$GLOBALS['COD']->dir?>/assets/dist/js/adminlte.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>