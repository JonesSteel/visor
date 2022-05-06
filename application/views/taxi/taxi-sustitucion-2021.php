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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--fontawesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <!--Datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
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
    </style>
    <style>
        th {
            background-color: #235B4E;
            color: #F2F3F7;
        }

        table.dataTable td {
            padding: 10px;
        }

        table.dataTable th {
            padding: 10px;
        }

        table.dataTable tbody td {
            vertical-align: middle;
        }

        .page-item.active .page-link {
            background-color: #235B4E;
            border: 1px solid #235B4E;
        }

        .page-link {
            color: #98989A;
            font-weight: bold;
        }

        .error {
            color: #9F2241;
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
        <p style="text-align: center"><strong>Módulos de Consulta Rápida</strong> | DGRPT</p>
        <p class="lead">
            <a href="<?php echo base_url(); ?>Visores">
                <i class='fas fa-home' style="font-size:20px;color:#2f6997;"></i>&nbsp;&nbsp;Regresar a Principal
            </a>
        </p>
        <div class="container">
            <div id="container">
                <div id="body">
                    <div id="body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="peritaje-provional-titulos-convenios" class="table table-striped table-bordered" style="width:100%; font-size: 16px; text-align: center;">
                                    <thead>
                                        <tr>
                                            <th>Placa</th>
                                            <th>Expediente</th>
                                            <th>Peritaje</th>
                                            <th>Títulos y Convenios de Adhesión</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!--Modal: Expediente-->
                        <?php

                        $this->load->view("modal/modal-expediente");

                        ?>
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
        <!--Datatable-->
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                /*
                DataTable
                */
                var peritaje_provional_titulos_convenios = $('#peritaje-provional-titulos-convenios').DataTable({
                    "language": {
                        "decimal": "",
                        "emptyTable": "No hay información",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                        "infoEmpty": "Mostrando 0 to 0 of 0 entradas",
                        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                        "infoPostFix": "",
                        "thousands": ",",
                        "lengthMenu": "Mostrar _MENU_ entradas",
                        "loadingRecords": " ",
                        "processing": "<br><h3>Cargando información...</h3><br>",
                        "search": "Buscar:",
                        "zeroRecords": "<b>¡Ningún resultado!</b>",
                        "paginate": {
                            "first": "Primero",
                            "last": "Último",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        }
                    },
                    "bProcessing": true,
                    "sAjaxSource": "<?php echo base_url('Read_data/ss_peritaje_provisional_titulos_convenios'); ?>",
                    "bPaginate": true,
                    "iDisplayLength": 10,
                    "aoColumns": [{
                            mData: "placa"
                        },
                        {
                            mData: "provisional"
                        }, {
                            mData: "peritaje"
                        }, {
                            mData: "titulos_convenios"
                        }
                    ],
                    "lengthChange": false
                });

                setInterval(function() {

                    peritaje_provional_titulos_convenios.ajax.reload();

                }, 300000);

                /*
                Modal expediente
                */

                function contentModalExpediente(controller, header, placa) {

                    document.getElementById("id-modal-provisional-peritaje-titulos-convenios").innerHTML = "";

                    document.getElementById("spinner-load-img-2").style.display = "";

                    document.getElementById("datos-generales-concesion").innerHTML = header + placa + "</b>";

                    $("#id-modal-provisional-peritaje-titulos-convenios").load(controller + placa, function(responseTxt, statusTxt, xhr) {

                        if (statusTxt == "success") {

                            document.getElementById("spinner-load-img-2").style.display = "none";

                        }

                        if (statusTxt == "error") {

                            document.getElementById("spinner-load-img-2").style.display = "none";

                            generateAlert("error", "Ocurrió un error al tratar de obtener los datos", "", "top");

                        }

                    });

                    return false;

                }

                $(document).on("click", ".btn-provisional", function() {

                    contentModalExpediente(
                        "<?php echo base_url('Read_data/content_provisional/'); ?>",
                        "<b>Imágenes y documentos de la concesión ",
                        $(this).closest("tr").find('td:eq(0)').text()
                    );

                });

                $(document).on("click", ".btn-peritaje", function() {

                    contentModalExpediente(
                        "<?php echo base_url('Read_data/content_peritaje/'); ?>",
                        "<b>Documentos obtenidos del peritaje de la concesión ",
                        $(this).closest("tr").find('td:eq(0)').text()
                    );

                });

                $(document).on("click", ".btn-titulos-convenios", function() {

                    contentModalExpediente(
                        "<?php echo base_url('Read_data/content_titulos_convenios/'); ?>",
                        "<b>Título y Convenio de Adhesión de la concesión ",
                        $(this).closest("tr").find('td:eq(0)').text()
                    );

                });

                /*
                Sweet Alert
                */

                function generateAlert(var_icon, var_title, var_text, var_position) {

                    Swal.fire({
                        icon: var_icon,
                        title: var_title,
                        text: var_text,
                        timer: 9000,
                        timerProgressBar: true,
                        backdrop: true,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#235B4E',
                    });


                    return false;

                }

            });
        </script>
</body>

</html>