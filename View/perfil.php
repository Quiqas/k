<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "perfil";



// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');


  if (!isset($_SESSION['user_id'])) {
    Header("Location: /modelo/home");
  }
?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil
      </h1>
     <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>-->
    </section>
    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary sombra">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user9-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Norma Janette Caro López</h3>

              <p class="text-muted text-center">Psicóloga</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Seguidores</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Siguiendo</b> <a class="pull-right">543</a>
                </li>
              </ul>

              <a href="#" class="btn btn-success btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary sombra">
            <div class="box-header with-border">
              <h3 class="box-title">Sobre Mí</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Educación</strong>

              <p class="text-muted">
               <b>2017 </b>Universidad Autónoma de Ciudad Juárez: Licenciatura en Educación (En curso: Nivel Avanzado)
              </p>

              <p class="text-muted">
                 <b> 2010-2014 </b>  Universidad Autónoma de Ciudad Juárez: Licenciatura en Psicología
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Locación</strong>

              <p class="text-muted">Ciudad Juaréz, Chihuahua.</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i>Habilidades</strong>

              <p>
                <span class="label label-danger">Vida Saludable</span>
                <span class="label label-success">Honestidad</span>
                <span class="label label-info">Ética</span>
                <span class="label label-warning">Responsabilidad</span>
                <span class="label label-primary">Respeto</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Servir y ayudar a los demás es mi pasión.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#timeline" data-toggle="tab">Experiencia</a></li>
              <li><a href="#activity" data-toggle="tab">Comentarios</a></li>
              <li><a href="#settings" data-toggle="tab">Contacto</a></li>
            </ul>
            <div class="tab-content sombra">
              <div class="tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user5-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Eber Hernandez</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>

                  </div>
                  <!-- /.user-block -->
                  <p>
                    Me gusto mucho su servicio.
                  </p>
                  

                 
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user4-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adilene N.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
               
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Me ayudo mucho, fue muy amable y el servicio que me dio fue muy bueno.
                  </p>

                  </div>
                <!-- /.post -->

                <div class="post clearfix">

              <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-12 ">
                      <p><b>Comentar</b></p>
                    </div>
                      <div class="col-sm-9 ">
                        
                        <input class="form-control input-sm" name="h" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-success pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                <!-- /.post -->
              </div>
            </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active " id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          2016 - 2017
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                     

                      <h3 class="timeline-header"><a href="#">Puesto: Dirección.</a></h3>

                      <div class="timeline-body">
                        Centro de Atención y Capacitación Psicopedagógica La Casa Azul.
                      </div>
                
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          2015
                        </span>
                  </li>
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                     

                      <h3 class="timeline-header"><a href="#">Puesto: Psicóloga Clínica.</a></h3>

                      <div class="timeline-body">
                          Centro de Prevención y Atención a la Violencia Familiar y de Género, Secretaría de Salud del Estado de Chihuahua.
                      </div>
                
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                     

                      <h3 class="timeline-header"><a href="#">Puesto: Coordinadora del Departamento de Prevención y Capacitación.</a></h3>

                      <div class="timeline-body">
                          Centro de Capacitación, Atención y Prevención de Abuso 
                          Sexual, CCAPAS A.C.
                      </div>
                
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                     

                      <h3 class="timeline-header"><a href="#">Puesto: Coordinadora de aplicación.</a></h3>

                      <div class="timeline-body">
                          Preparatoria Abierta.
                      </div>
                
                    </div>
                  </li>
                  <li class="time-label">
                        <span class="bg-yellow">
                          2014-2015
                        </span>
                  </li>

                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                     

                      <h3 class="timeline-header"><a href="#">Puesto: Monitora de caso de Trastorno del Espectro Autista.</a></h3>

                      <div class="timeline-body">
                          Servicio Particular en Colegio Bilingüe Loretto.
                      </div>
                
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                     

                      <h3 class="timeline-header"><a href="#">Puesto: : Terapeuta general y asistente de psicología.</a></h3>

                      <div class="timeline-body">
                          Nandú SPA.
                      </div>
                
                    </div>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nombre</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Telefono</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Telefono">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Información</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Cuéntame con más detalles como podemos ayudarte"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  

<?php
	include_once('static/Footer.php');
?>