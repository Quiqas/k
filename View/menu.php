<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "menu";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	
		<h1 class="MargenTop"> Menú </h1>

	<div class="wrapper1 ">
		
		<div class="container1" id="c0">
			<div class="image1" id="i0">
				
				<div class="city">
					<img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/Exp.png" class=" ajuste1"  alt="">
				</div>
			</div>
			<div class="story" id="s0">
				<div class="info">
				<a href="<?=$GLOBALS['COD']->dir?>/expertos"><h3>Ver Expertos</h3></a>
				<p> Conoce a nuestros expertos calificados.</p>
				</div>
			</div>
		</div>
		<div class="container1" id="c1">
			<div class="image1" id="i1">
				<div class="city">
					<img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/especialista.png" class=" ajuste1"  alt="">
				</div>

			</div>
			<div class="story" id="s1">
				<div class="info">
					<a href="<?=$GLOBALS['COD']->dir?>/chat"><h3>Chat con Especialista</h3></a>
				<p>Habla con nuestros especialistas a la hora que necesites para resolver alguna duda que tengas.</p>
				</div>
			</div>
		</div>
		<div class="container1" id="c2">
			<div class="image1" id="i2">
				<div class="city">
					<img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/niño.png" class=" ajuste"  alt="">
				</div>
				
			</div>
			<div class="story" id="s2">
				<div class="info">
	        <a href="<?=$GLOBALS['COD']->dir?>/RegistrarN"><h3>Registrar Niño</h3></a>
				<p> Registra a un niño con TDAH para que puedas mantener un seguimiento más completo de el.</p>
					
				</div>
			</div>
		</div>

		


	<div class="page">
		<h4>Selecciona</h4>
		<ul><li class="lis"> <<< </li>

		<li class="lis"> >>> </li>
		</ul>
		</div>
</div>
</div>
  

<?php
	include_once('static/Footer.php');
?>

