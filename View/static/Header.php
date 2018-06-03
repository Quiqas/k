<?php 

session_start();

$_SESSION['user_id'] = 1;
$_SESSION['user_name'] = 'Norma';


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TDAH Kids | <?=ucfirst($page_title)?> </title>

  <link rel="shortcut icon" type="image/x-icon" href="<?=$GLOBALS['COD']->dir?>/assets/images/Icono.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css?<?=$elapsed_time?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/bower_components/font-awesome/css/font-awesome.min.css?<?=$elapsed_time?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/bower_components/Ionicons/css/ionicons.min.css?<?=$elapsed_time?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/dist/css/Custom.min.css?<?=$elapsed_time?>">

  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/dist/css/skins/skin-blue.min.css?<?=$elapsed_time?>">

  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/dist/css/swiper.min.css">

  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/dist/css/<?=$page_title?>.css?<?=$elapsed_time?>">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!-- Bootstrap core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom fonts for this template
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">  -->

    <!-- Plugin CSS -->
    <link href="<?=$GLOBALS['COD']->dir?>/assets/magnific-popup/magnific-popup.css?<?=$elapsed_time?>" rel="stylesheet">

    <!-- Custom styles for this template -->
   
</head>


<body class=" skin-blue  layout-top-nav  ">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/TDAH/home">
            <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/logoS.png" class=" navbar-brand Logo-Code"  alt="">
          </a>
          
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li class="active"><a href="/TDAH/menu">Menú</a></li>
           
          </ul>
          
        </div>
        <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <?php 
        if (!isset($_SESSION['user_id'])) {
        ?>
           <li class="active"><a href="<?=$GLOBALS['COD']->dir?>/login">
            <i class="fa  fa-user"></i> <span>Login</span></a></li>
          <li><a href="<?=$GLOBALS['COD']->dir?>/registro">
            <i class="fa fa-user-plus"></i> <span>Registro</span></a></li>
        <?php } ?>
          <!-- Menu de Mensajes -->

          
          <!-- Fin Menu de Mensajes -->

          <!-- Menu Notificaciones -->
          

          <!-- Fin Menu Notificacion -->

          <!-- Tasks Menu -->
          
                  <!-- end task item -->
                
        <?php 

          if (isset($_SESSION['user_id'])) {
        ?>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user9-128x128.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"> Norma</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user9-128x128.jpg" class="img-circle" alt="User Image">

                  <p>
                    Norma - Psicóloga.
                    <small>Miembro desde  
                    Mayo - 2018
                
</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Niños</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Chat</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Expertos</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?=$GLOBALS['COD']->dir?>/Perfil" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?=$GLOBALS['COD']->dir?>/logout" class="btn btn-default btn-flat">Salir</a>
                  </div>
                </li>
              </ul>
            </li>
            <?php } ?>
          
        </ul>
      </div>
      </div>
      <!-- /.container-fluid -->


    </nav>
    
   
      
    
  </header>
 

  

    
