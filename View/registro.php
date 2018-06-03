<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// -------------------------------------------------------------------- 
   session_start();
// --------------------------------------------------------------------
//  Include header
// -------------------------------------------------------------------- 
if (isset($_SESSION['user_id'])) {
  Header("Location: /modelo/home");
}else{
  if (isset($_POST['s'])) {

    /* 
    Se incluye el archivo Connection para hacer conexion a la base de datos.
    */
    include_once 'static/connection.php';

    /* Almaceno los datos que son enviados del formulario en un arreglo.*/

    $datetime = date_create()->format('Y-m-d H:i:s');

    $Nombre = mysqli_real_escape_string($connection, $_POST['Nombre']);
    $Username = mysqli_real_escape_string($connection, $_POST['Username']);
    $Edad = mysqli_real_escape_string($connection, $_POST['Edad']);
    $Email = mysqli_real_escape_string($connection, $_POST['Email']);
    $Password = mysqli_real_escape_string($connection, $_POST['Password']);
    $Password1 = mysqli_real_escape_string($connection, $_POST['Password1']);
    $Date = mysqli_real_escape_string($connection, $datetime);
    $Type = mysqli_real_escape_string($connection, 'Normal');
        
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
    if ($resultcheck > 0 ) {
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
                El nombre de usuario o contraseña ya esta registrado.
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>';
    }else{
      if($Password == $Password1){
        //Encriptando Contraseña '$Nombre', '$Edad', '$Username', '$Email', '$EncriptPass' ,'$Type', '$Date'
        $EncriptPass = password_hash($Password, PASSWORD_DEFAULT);
        //Almacenando los datos
        $sql = "INSERT INTO usuarios (user_name, user_age, user_nickname, user_email, user_password, user_type, user_date_register) VALUES (?, ?, ?, ?, ?, ?, '$Date');";

        $stmt = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL Error";
        }else{
          mysqli_stmt_bind_param($stmt, "sissss", $Nombre, $Edad ,$Username, $Email, $EncriptPass, $Type);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          
        }
           
            
            $connection->close();
            Header("Location: /modelo/home");
            exit();
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
  <title>Only Code | Registro</title>
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?=$GLOBALS['COD']->dir?>/"><img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/Logo2.png" class=" responsive Logo-Code-Main" alt="Logo Only Code"></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrarse</p>

    <form action="" Method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="Nombre" required placeholder="Nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="Username" pattern="[A-Za-z0-9_-]{1,20}" title="De Ocho o veinte caracteres, Caracteres Permitidos: A-Za-z0-9_-" required placeholder="Username">
        <span class="glyphicon glyphicon-text-background form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="number" class="form-control" name="Edad" required placeholder="Edad">
        <span class="glyphicon glyphicon-apple form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="Email" required placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="Password" required pattern="[A-Za-z0-9_-]{8,20}" title="De Ocho o veinte caracteres, Caracteres Permitidos: A-Za-z0-9_-" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="Password1" required pattern="[A-Za-z0-9_-]{8,20}" title="De Ocho o veinte caracteres, Caracteres Permitidos: A-Za-z0-9_-" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <center>
              <label>
                <input type="checkbox"> Acepto los <a href="#">terminos y condiciones.</a>
              </label>
            </center>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="s" id = "s" class="btn btn-primary btn-block btn-flat">Registrarse</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Registrarse usando
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Registrarse usando 
        Google+</a>
    </div>

    <a href="<?=$GLOBALS['COD']->dir?>/login" class="text-center">¿Ya tienes cuenta?</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?=$GLOBALS['COD']->dir?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=$GLOBALS['COD']->dir?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=$GLOBALS['COD']->dir?>/assets/plugins/iCheck/icheck.min.js"></script>
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
