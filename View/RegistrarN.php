<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "crear";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content container-fluid container">

		<div class="box box-primary sombra">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar Niño</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="Nombre">Nombre del Niño</label>
                  <input class="form-control" required id="Nombre" type="text" placeholder="Introduce el Nombre del Niño">
                </div>
                
                 <div class="form-group">
                  <label for="Categoria">Edad</label>
                  <input class="form-control" id="Edad" required type="number" placeholder="Introduce la Edad del Niño">
                </div>

                <div class="form-group">
                  <label for="Categoria">Diagnóstico del Niño</label>
                  <input class="form-control" id="Categoria" required type="text" placeholder="Introduce el Diagnóstico del Niño">
                </div>

                <div class="form-group">
                  <label for="Categoria">Escolaridad</label>
                  <input class="form-control" id="Categoria" required type="text" placeholder="Escolaridad del Niño">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Foto del Niño</label>
                  <input id="exampleInputFile" type="file">
                </div>

                
              <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-success" type="submit">Guardar</button>
              </div>
            </form>
          </div>




    </section>
    <!-- /.content -->
  </div>
  

<?php
  include_once('static/Footer.php');
?>