<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// -------------------------------------------------------------------- 
  $page_title = "expertos";
  
// --------------------------------------------------------------------
//  Include header
// -------------------------------------------------------------------- 
  include_once('static/Header.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content container-fluid container container1">
    <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Nuestros Expertos</h3>

                      <div class="box-tools pull-right">
                        <span class="label label-success">8 Nuevos Expertos</span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <ul class="users-list clearfix">
                        <li>
                          <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user8-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Cristhian</a>
                          <span class="users-list-date">Nutriólogo</span>
                        </li>
                        <li>
                          <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user10-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="<?=$GLOBALS['COD']->dir?>/perfil">Norma</a>
                          <span class="users-list-date">Psicóloga</span>
                        </li>
                        <li>
                          <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user7-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Jane</a>
                          <span class="users-list-date">Terapeuta Fisico</span>
                        </li>
                        <li>
                          <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user6-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">John</a>
                          <span class="users-list-date">Doctor</span>
                        </li>
                        <li>
                          <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user1-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Alexander</a>
                          <span class="users-list-date">Terapia ocupacional</span>
                        </li>
                        <li>
                          <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user5-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Sarah</a>
                          <span class="users-list-date">Trabajadora social</span>
                        </li>
                        <li>
                          <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user4-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Nora</a>
                          <span class="users-list-date">Enfermera</span>
                        </li>
                        <li>
                          <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user3-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Nadia</a>
                          <span class="users-list-date">Fisioterapeuta</span>
                        </li>
                      </ul>
                      <!-- /.users-list -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                      <a href="javascript:void(0)" class="uppercase">Ver Todos los Expertos</a>
                    </div>
                    <!-- /.box-footer -->
                  </div>
                </section>
  </div>

              <?php
  include_once('static/Footer.php');
?>
