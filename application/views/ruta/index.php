<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Visor Provisional</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="navbar-brand">
			<img src="<?php echo base_url(); ?>/assets/img/new_cdmx_logo.png" width="20%" class="img-responsive" alt="boostrap responsive image" />
		</a>
	</nav>
</div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<h1 class="display-4" style="text-align: center"><strong>Módulos de Consulta Rápida</strong> | DGRPT</h1>
	<p class="lead">Vista rápida de los módulos de consulta que se han desarrollado dentro de la <strong>SCyVBDRT.</strong></p>
</div>

<div class="container">
	<div class="card-deck mb-3 text-center">
		<div class="card mb-4 box-shadow">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">Taxi Sustitución</h4>
			</div>
			<div class="card-body">
				<p style="text-align: justify">Aplicación que nos permite consultar los documentos con los que cuenta cada concesión de Taxi que entro al <strong>programa de sustitución.</strong></p>
				<br>
				<button onclick="location.href='http://10.5.95.91/visor/Visores/taxi_sustitucion'" class="btn btn-lg btn-block btn-primary">Seleccionar</button>
			</div>
		</div>
		<div class="card mb-4 box-shadow">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">Sustitución (Pre-registro 2020)</h4>
			</div>
			<div class="card-body">
				<p style="text-align: justify">Aplicación que nos permite consultar los documentos con los que cuenta cada concesión de Ruta que entro al <strong>programa de chatarrización.</strong></p>
				<br>
				<button onclick="location.href='http://10.5.95.91/visor/Visores/sustitucion'" class="btn btn-lg btn-block btn-primary">Seleccionar</button>
			</div>
		</div>
	</div>
	<footer class="pt-4 my-md-5 pt-md-5 border-top" style="padding-top: 2rem !important;">
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
						<img src="https://www.semovi.cdmx.gob.mx/storage/app/uploads/public/5dc/9f6/4d9/5dc9f64d919ce331367401.png" width="100px" height="75px">
					</a>
				</div>
				<br>
				<div class="footer-info">
					<a href="https://datos.cdmx.gob.mx/" target="_blank">
						<img src="https://www.semovi.cdmx.gob.mx/storage/app/uploads/public/5cc/0fb/d84/5cc0fbd84b72f540674022.png" width="100px" height="75px">
					</a>
				</div>
				<br>
				<div class="footer-info">
					<a href="https://www.tianguisdigital.cdmx.gob.mx/" target="_blank">
						<img src="https://www.semovi.cdmx.gob.mx/storage/app/uploads/public/5dc/9f6/a8a/5dc9f6a8aa582467576890.png" width="100px" height="75px">
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
