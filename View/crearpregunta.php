<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
ob_start();
  $page_title = "crear";
  
	include_once('static/Header.php');
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
if (!isset($_SESSION['user_id'])) {
  Header("Location: /modelo/");
}else{

  if (isset($_POST['submit'])) {

    include_once 'static/connection.php';


    /* Almaceno los datos que son enviados del formulario en un arreglo.*/

    $datetime = date_create()->format('Y-m-d H:i:s');

    $Nombre = mysqli_real_escape_string($connection, $_POST['Nombre']);
    $Categoria = mysqli_real_escape_string($connection, $_POST['Categoria']);
    $Pregunta = mysqli_real_escape_string($connection, $_POST['editor']);
        
    
        //Almacenando los datos
        $sql = "INSERT INTO question (question_title, question_category, question_description, question_published) VALUES (?, ?, ?, {'$datetime'},{'Sin Responder'});";

        $stmt = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL Error";
        }else{
          mysqli_stmt_bind_param($stmt, "sss", $Nombre, $Categoria ,$Pregunta);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          
        }
           
            
            $connection->close();
            Header("Location: /modelo/preguntas");
            exit();
          }
            

    }

?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content container-fluid container">


    <div class="box box-danger sombra">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Pregunta</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" Method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="Nombre">Titulo</label>
                  <input class="form-control" required id="Nombre" name="Nombre" type="text" placeholder="Introduce la Pregunta">
                </div>
                <div class="form-group">
                  <label for="Categoria">Categoría</label>
                  <input class="form-control" id="Categoria" name="Categoria" required type="text" placeholder="Introduce la Categoría de la Pregunta">
                </div>
                <textarea class="ckeditor" required name="editor"></textarea>
              <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-danger" name="submit" type="submit">Guardar</button>
              </div>
            </form>
          </div>



    </section>
    <!-- /.content -->
  </div>
  

<?php
  include_once('static/Footer.php');
?>