<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "home";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

      <!-- Slides -->
        <div class="swiper-slide">
          <li aria-hidden="true" style="width: 100%;" class="">
          <div class="wrapper1 wrapper-lg row">
            <div class="hero-img col-lg-8">
              <img class="" alt="Logo TDAH Kids"  src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/Logo2.png" width="600px" height="420px">
            </div>
          <div class="content col-lg-4">
            <h2>¡Bienvenido a TDAH Kids!</h2>
            <p>TDAH Kids es una página Web orientada a la ayuda de personas que conviven con niños que tienen TDAH.</p>
        
          </div>

          </div>
        </li>

        </div>
        <!-- Slides -->
        <div class="swiper-slide">
          <li aria-hidden="true" style="width: 100%;" class="">
          <div class="wrapper1 wrapper-lg row">
            <div class="hero-img col-lg-8">
              <img class="" alt="kids image"  src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/kids.jpg" width="600px" height="420px">
            </div>
          <div class="content col-lg-4">
            <h2>El TDAH en Niños</h2>
            <p>Los síntomas del TDAH aparecen antes de los 7 años Las conductas predictivas del TDAH suelen manifestarse antes de los 7 años y cómo mínimo tienen que tener presencia en 2 ámbitos de la vida del niño, por ejemplo, en casa y en la escuela. Los principales síntomas de este trastorno son la falta de atención, la hiperactividad y la impulsividad.</p>
        
          </div>

          </div>
        </li>

        </div>
        
        <div class="swiper-slide">
          <li aria-hidden="true" style="width: 100%;" class="">
          <div class="wrapper1 wrapper-lg row">
            <div class="hero-img col-lg-8">
              <img class="" alt="school image" src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/school.jpg" width="600px" height="420px">
            </div>
            <div class="content col-lg-4">
              <h2>Es un Trastorno Infradiagnosticado</h2>
              <p>Solo el 2,5% de los niños están diagnosticados, del 7% que se calcula que lo padecen. Como consecuencia de ello, solo el 1% de los afectados recibe tratamiento.</p>
            </div>
          </div>
        </li>
        </div>
        <div class="swiper-slide">
          <li aria-hidden="true" style="width: 100%;" class="">
          <div class="wrapper1 wrapper-lg row">
            <div class="hero-img col-lg-8">
              <img class="" alt="Powerful platform, unparalleled ecosystem" data-hires="https://www-assets2.herokucdn.com/assets/home/hero/ecosystem_2x-51bfd00540ebf0b1e52b4fd935222d5c46c7ad58fc05273ca96311788ac0777c.png" src="https://www-assets3.herokucdn.com/assets/home/hero/ecosystem-51bfd00540ebf0b1e52b4fd935222d5c46c7ad58fc05273ca96311788ac0777c.png" width="600px" height="420px">
            </div>
            <div class="content col-lg-4">
              <h2>El TDAH en niños: Dato Curioso.</h2>
              <p>El 20% del fracaso escolar está asociado al TDAH La escuela es uno de los ámbitos en el que más padecen los niños con este trastorno. Debido a su dificultad para memorizar y centrar la atención, estos niños tienen complicaciones en matemáticas, comprensión lectora y escritura.</p>
            </div>
          </div>
        </li>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
    

    <section class="bg-blue section1" id="about">
      <div class="container ">
        <div class="row">
          <div class="col-lg-8 auto-center text-center">
            <h3 class="section-heading text-white">Puedes llegar a donde tu <span class="sp-3">quieras</span> nunca dejes de  <span class="sp-4">soñar </span></h3>
            <hr class="light my-4">
            <p class="text-faded mb-4">Todos Somos genios pero si juzgas a un pez por su habilidad para trepar arboles arboles vivirá toda su vida pensando que es un inútil.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section1 Blanco">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">¡A Tu Servicio!</h2>
            <hr class="my-4 hr1">
          </div>
        </div>
      </div>
      <br><br><br>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">¡Sigue Mejorando!</h3>
              <p class="text-muted mb-0">Mejoramos constantemente para una mejor ayuda.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Siempre Listos</h3>
              <p class="text-muted mb-0">Siempre hay un experto listo para cuando lo necesites. </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">Nuestros expertos se mantienen actualizados.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Hecho con Amor</h3>
              <p class="text-muted mb-0">Por la salud y el bien de nuestros niños.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

<section class="bg-blue section1" id="imagen">
      <div class="container ">
        <div class="row">
          <div class="col-lg-12  text-center">
            <img class="" alt="Efectos Positivos TDAH"  src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/pos.jpg">
          </div>
        </div>
      </div>
    </section>

  <section id="contact" class="section1 Blanco">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading">¡Mantengámonos en contacto!</h2>
            <hr class="my-4 hr1">
            <p class="mb-5">
            ¿Tienes alguna inquietud? ¡Mandanos un email y nosotros te responderemos tan pronto nos sea posible!</p>
          </div>
        </div>
      <br><br>
        
        
        <div class="box box-primary sombra">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">TDHA Kids - Email</h3>
              <!-- tools box -->
             
              <!-- /. tools -->
            </div>
            <div class="box-body">
               <form action="https://formspree.io/albert502@outlook.com" method="POST" >
                <div class="form-group">
                   <input type="text" class="form-control" id="nombre" placeholder="¿Cómo te llamas?" required name="Nombre">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="¿Cuál es tu correo electrónico?" name="_replyto" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="Telefono" placeholder="¿Cuál es tu número telefónico?"  name="Telefono">
                </div>  
                <div class="form-group">
                  <input type="text" class="form-control" name="_subject" placeholder="Tema">
                </div>
                <div>


                  <textarea class="textarea" placeholder="¿Cuál es tu inquietud?"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required name="Inquietud"></textarea>
                </div>

                <div class="box-footer clearfix">
                    <button type="submit" class="pull-right btn btn-default" id="sendEmail" >Enviar
                      <i class="fa fa-arrow-circle-right"></i></button>
                  </div>
                
              </form>
              </div>
            </div>
            
      </div>
    </section>

    <!-- /.content -->
  </div>
  

<?php
	include_once('static/Footer.php');
?>