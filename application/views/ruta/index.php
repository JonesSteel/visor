<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Visor RPT</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" />
	<!--
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
-->
	<!--fontawesome icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<style>
		.btn-primary,
		.btn-primary:hover,
		.btn-primary:active,
		.btn-primary:visited,
		.btn-primary:focus {
			background-color: #235B4E;
			border-color: #235B4E;
		}

		.swal2-popup .swal2-styled:focus {
			box-shadow: none !important;
		}

		.btn-primary:not(:disabled):not(.disabled).active,
		.btn-primary:not(:disabled):not(.disabled):active,
		.show>.btn-primary.dropdown-toggle {
			color: #fff;
			background-color: #235B4E;
			border-color: #235B4E;
		}

		hr {
			border-top: 3px dotted #235B4E;
		}
	</style>
</head>

<body style="height: 100vh; overflow: auto;">
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="navbar-brand">
				<img src="<?php echo base_url(); ?>/assets/img/new_cdmx_logo.png" width="20%" class="img-responsive" alt="boostrap responsive image" />
			</a>
		</nav>
	</div>
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		<h1 class="display-4" style="text-align: center"><strong>Módulos de Consulta y Acceso Rápido</strong> | DGRPT</h1>
		<p class="lead">Vista rápida de los módulos de consulta que se han desarrollado dentro de la <strong>SCyVBDRT.</strong></p>

		<div class="container">
			<b>Acceso a los Aplicativos</b>
			<hr>
			<div class="row">
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #196F3D; border-radius:15px;">
						<div class="card-body">
							<a href="http://10.5.95.91/App_Isis/Login" target="_blank" style='text-decoration:none;color:black;'>
								<h5>Oficios ISIS </h5>
								<i class="fa-solid fa-file-lines fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #FFC300 ; border-radius:15px;">
						<div class="card-body">
							<a href="http://10.5.95.91/sustitucion_2021/inicio" target="_blank" style='text-decoration:none;color:black;'>
								<h5>Sustitución y Retiro </h5>
								<i class="fa-solid fa-bus fa-2x"></i>
							</a>

						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #579894 ; border-radius:15px;">
						<div class="card-body">
							<a href="http://10.5.95.91/visor_master/index.php" target="_blank" style='text-decoration:none;color:black;'>
								<h5>Visor de RUTA </h5>
								<i class="fa-solid fa-address-book fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #77CD93 ; border-radius:15px;">
						<div class="card-body">
							<a href="http://10.5.95.91/taxi-master/index.php" target="_blank" style='text-decoration:none;color:black;'>
								<h5>Visor de TAXI </h5>
								<i class="fa-solid fa-address-card fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #7779CD ; border-radius:15px;">
						<div class="card-body">
							<a href="https://10.5.95.45/validaciones/validaciones/#/" target="_blank" style='text-decoration:none;color:black;'>
								<h5>Pre-Validación </h5>
								<i class="fa-solid fa-bars fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #C6D817  ; border-radius:15px;">
						<div class="card-body">
							<a href="http://10.5.95.91/geotaxi" target="_blank" style='text-decoration:none;color:black;'>
								<h5>Geoespacial de Taxi </h5>
								<i class="fa-solid fa-globe fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #1A5276 ; border-radius:15px;">
						<div class="card-body">
							<a href="http://10.5.95.91/modulo-correccion-de-datos/Login" target="_blank" style='text-decoration:none;color:black;'>
								<h5>Corrección de Datos </h5>
								<i class="fa-solid fa-window-restore fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #4DDF1F ; border-radius:15px;">
						<div class="card-body">
							<a href="<?php echo base_url("Visores/preregistro"); ?>" target="_blank" style='text-decoration:none;color:black;'>
								<h6> Cambio de Semáforo </h6>
								<i class="fa-solid fa-keyboard fa-3x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #E8A1CB ; border-radius:15px;">
						<div class="card-body">
							<a href="https://187.188.116.38:3445/depositos/Login" target="_blank" style='text-decoration:none;color:black;'>
								<h5>Depósitos </h5>
								<i class="fa-solid fa-truck fa-4x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3 " style="background:  #C70039 ; border-radius:15px;">
						<div class="card-body">
							<a href="https://187.188.116.38:3445/taxi/api-semovi-taxi/Login" target="_blank" style='text-decoration:none;color:black;'>
								<h5> Taxi Licencias </h5>
								<i class="fa-solid fa-id-card fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3" style="background: #C70039; border-radius:15px;">
						<div class="card-body">
							<a href="<?php echo base_url("Visores/taxi_sustitucion_2021"); ?>" target="_self" style='text-decoration:none; color:black;'>
								<span style="font-size: 18px; font-weight: bold;">Taxi Sustitución 2021</span>
								<i class="fa-solid fa-taxi fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3" style="background: #C70039; border-radius:15px;">
						<div class="card-body">
							<a href="<?php echo base_url("Visores/bono_combustible"); ?>" target="_self" style='text-decoration:none; color:black;'>
								<span style="font-size: 18px; font-weight: bold;">Bono de combustible</span>
								<i class="fa-solid fa-gas-pump fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="container p-3 my-3" style="background: #C70039; border-radius:15px;">
						<div class="card-body">
							<a href="<?php echo base_url("Visores/sin_informacion"); ?>" target="_self" style='text-decoration:none; color:black;'>
								<span style="font-size: 14px; font-weight: bold;">Mano Alzada Fase 1</span>
								<i class="fa-solid fa-hand-holding-dollar fa-3x"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container p-3 my-3" style="background: #C70039; border-radius:15px;">
						<div class="card-body">
							<a href="<?php echo base_url("Visores/sin_informacion"); ?>" target="_self" style='text-decoration:none; color:black;'>
								<span style="font-size: 16px; font-weight: bold;">Cuautepec Fase 1</span>
								<i class="fa-solid fa-bus fa-3x"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<footer class="pt-4 my-md-5 pt-md-5 border-top" style="padding-top: 1rem !important;">
				<div class="row">
					<div class="col-6 col-md" style="text-align: justify">
						<h5><strong>Atención Ciudadana</strong></h5>
						<p><strong>Dirección:</strong> Avenida Alavaro Obregón 269, Colonia Roma Norte,
							Alcaldia Cuauthémoc, C.P. 06700, Ciudad de México.</p>
					</div>
					<div class="col-6 col-md">
						<h5><strong>Navegación</strong></h5>
						<ul class="list-unstyled text-small">
							<li><a class="text-muted" href="https://www.semovi.cdmx.gob.mx/">Inicio</a></li>
							<li><a class="text-muted" href="https://www.semovi.cdmx.gob.mx/secretaria">Secretaria</a></li>
							<li><a class="text-muted" href="https://www.semovi.cdmx.gob.mx/programas-de-mejora-del-transporte-publico">Programa de Mejora del Transporte Público</a></li>
							<li><a class="text-muted" href="https://www.semovi.cdmx.gob.mx/movilidad-integrada">Movilidad Integrada</a></li>
							<li><a class="text-muted" href="https://www.semovi.cdmx.gob.mx/tramites-y-servicios">Tramites y Servicios</a></li>
							<li><a class="text-muted" href="https://www.semovi.cdmx.gob.mx/tramites-y-servicios/transparencia">Gobierno Abierto</a></li>
							<li><a class="text-muted" href="https://www.semovi.cdmx.gob.mx/transparencia">Transparencia</a></li>
						</ul>
					</div>
					<div class="col-6 col-md">
						<h5><strong>Sitios Relacionados</strong></h5>
						<ul class="list-unstyled text-small">
							<li><a class="text-muted" href="https://www.sedema.cdmx.gob.mx/">Secretaria del Medio Ambiente</a></li>
							<li><a class="text-muted" href="https://www.ssc.cdmx.gob.mx/">Secretaria de Seguridad Pública</a></li>
							<li><a class="text-muted" href="https://www.ste.cdmx.gob.mx/">Servicio de Transporte Eléctrico</a></li>
							<li><a class="text-muted" href="https://www.metro.cdmx.gob.mx/">Sistema de Transporte Colectivo</a></li>
							<li><a class="text-muted" href="https://www.metrobus.cdmx.gob.mx/">Metrobús</a></li>
							<li><a class="text-muted" href="http://www.rtp.gob.mx/">Red de Transporte de Pasajeros</a></li>
							<li><a class="text-muted" href="https://www.ort.cdmx.gob.mx/">CETRAM</a></li>
						</ul>
					</div>
					<div class="col-6 col-md" style="text-align: center">
						<div class="footer-info">
							<a href="https://plazapublica.cdmx.gob.mx/uploads/decidim/attachment/file/12/plan_gob_nov_digital.pdf" target="_blank">
								<img src="https://www.semovi.cdmx.gob.mx/storage/app/uploads/public/5dc/9f6/4d9/5dc9f64d919ce331367401.png" width="95px" height="65px">
							</a>
						</div>
						<br>
						<div class="footer-info">
							<a href="https://datos.cdmx.gob.mx/" target="_blank">
								<img src="https://www.semovi.cdmx.gob.mx/storage/app/uploads/public/5cc/0fb/d84/5cc0fbd84b72f540674022.png" width="95px" height="65px">
							</a>
						</div>
						<br>
						<div class="footer-info">
							<a href="https://www.tianguisdigital.cdmx.gob.mx/" target="_blank">
								<img src="https://www.semovi.cdmx.gob.mx/storage/app/uploads/public/5dc/9f6/a8a/5dc9f6a8aa582467576890.png" width="95px" height="65px">
							</a>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
</body>

</html>