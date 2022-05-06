<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Read_data extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Read_data_model');
    }

    /*
    Taxi
    */

    public function ss_peritaje_provisional_titulos_convenios()
    {
        $data_processed = array();

        $data = $this->Read_data_model->get_peritaje_provisional_titulos_convenios();

        if (is_array($data)) {

            if (count($data) > 0) {

                for ($i = 0; $i < count($data); $i++) {

                    $data_processed[] = array(
                        "placa" => $data[$i]["placa"],
                        "provisional" => "<button type=\"button\" class=\"btn btn-primary btn-provisional\" data-toggle=\"modal\" data-target=\"#modal-provisional-peritaje-titulos-convenios\"><b><i class=\"fa-solid fa-folder\"></i>&nbsp;&nbsp;Expediente</b></button>",
                        "peritaje" => "<button type=\"button\" class=\"btn btn-primary btn-peritaje\" data-toggle=\"modal\" data-target=\"#modal-provisional-peritaje-titulos-convenios\"><b><i class=\"fa-solid fa-list-check\"></i>&nbsp;&nbsp;Peritaje</b></button>",
                        "titulos_convenios" => "<button type=\"button\" class=\"btn btn-primary btn-titulos-convenios\" data-toggle=\"modal\" data-target=\"#modal-provisional-peritaje-titulos-convenios\"><b><i class=\"fa-solid fa-file-contract\"></i>&nbsp;&nbsp;Títulos y convenios</b></button>",

                    );
                }
            }
        }

        $ss = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data_processed),
            "iTotalDisplayRecords" => count($data_processed),
            "aaData" => $data_processed
        );

        echo json_encode($ss);
    }

    public function content_provisional(string $placa)
    {

        $data = $this->Read_data_model->get_provisional_by_placa($placa);

        $data_processed = array();

        if (is_array($data)) {

            if (count($data) > 0) {

                $path_img = base_url("assets/img/pdf-2.PNG");

                for ($i = 0; $i < count($data); $i++) {

                    $id = $data[$i]['id'];
                    $placa = $data[$i]['placa'];

                    if ($data[$i]['img_niv'] == null) {

                        $img_niv = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Imagen de la serie no encontrada</b></span><div>";
                    } else {

                        $img_niv = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['img_niv']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Imagen de la serie</b></span><div>";
                    }

                    if ($data[$i]['img_placa'] == null) {

                        $img_placa = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Imagen de la placa no encontrada</b></span><div>";
                    } else {

                        $img_placa = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['img_placa']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Imagen de la placa</b></span><div>";
                    }

                    if ($data[$i]['img_vehiculo'] == null) {

                        $img_vehiculo = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Imagen de la unidad no encontrada</b></span><div>";
                    } else {

                        $img_vehiculo = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['img_vehiculo']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Imagen de la unidad</b></span><div>";
                    }

                    if ($data[$i]['pdf_comprobante'] == null) {

                        $pdf_comprobante = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Comprobante de domicilio no encontrado</b></span><div>";
                    } else {

                        $pdf_comprobante = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['pdf_comprobante']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Comprobante de domicilio</b></span><div>";
                    }

                    if ($data[$i]['pdf_factura'] == null) {

                        $pdf_factura = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Factura no encontrada</b></span><div>";
                    } else {

                        $pdf_factura = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['pdf_factura']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Factura</b></span><div>";
                    }

                    if ($data[$i]['pdf_ine'] == null) {

                        $pdf_ine = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Documento de identificación no encontrado</b></span><div>";
                    } else {

                        $pdf_ine = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['pdf_ine']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Documento de identificación</b></span><div>";;
                    }

                    if ($data[$i]['pdf_tarjeta'] == null) {

                        $pdf_tarjeta = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Tarjeta de circulación no encontrada</b></span><div>";
                    } else {

                        $pdf_tarjeta = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['pdf_tarjeta']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Tarjeta de circulacion</b></span><div>";
                    }

                    if ($data[$i]['pdf_titulo'] == null) {

                        $pdf_titulo = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Título no encontrado</b></span><div>";
                    } else {

                        $pdf_titulo = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['pdf_titulo']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Título</b></span><div>";
                    }

                    if ($data[$i]['pdf_baja'] == null) {

                        $pdf_baja = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Baja vehicular no encontrada</b></span><div>";
                    } else {

                        $pdf_baja = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['pdf_baja']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Baja vehicular</b></span><div>";
                    }

                    if ($data[$i]['pdf_autorizacion'] == null) {

                        $pdf_autorizacion = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Autorización no encontrada</b></span><div>";
                    } else {

                        $pdf_autorizacion = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['pdf_autorizacion']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Autorización</b></span><div>";
                    }

                    if ($data[$i]['pdf_manifestacion'] == null) {

                        $pdf_manifestacion = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Manifestación no encontrada</b></span><div>";
                    } else {

                        $pdf_manifestacion = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$data[$i]['pdf_manifestacion']}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Manifestación</b></span><div>";
                    }

                    $data_processed[] = array(
                        "bloque_1" => "<div class=\"row\">{$img_niv}{$img_placa}{$img_vehiculo}</div>",
                        "bloque_2" => "<div class=\"row\">{$pdf_comprobante}{$pdf_factura}{$pdf_ine}</div>",
                        "bloque_3" => "<div class=\"row\">{$pdf_tarjeta}{$pdf_titulo}{$pdf_baja}</div>",
                        "bloque_4" => "<div class=\"row\">{$pdf_autorizacion}{$pdf_manifestacion}</div>"
                    );
                }
            }
        }

        if (count($data_processed) == 0) {

            $concesion = array($placa);

            $this->load->view('not-found', compact("concesion"));

            return false;
        }

        $this->load->view('modal/content-modal-expediente', compact("data_processed"));
    }

    public function content_peritaje(string $placa)
    {

        $data = $this->Read_data_model->get_peritaje_by_placa($placa);

        $data_processed = array();

        $path_img = base_url("assets/img/pdf-2.PNG");

        $abs_path_dir_peritaje = "/laragon/www/";

        $host = explode("/", base_url())[0] . "//" . explode("/", base_url())[2] . "/";

        if (is_array($data)) {

            if (count($data) > 0) {

                for ($i = 0; $i < count($data); $i++) {

                    $path_acta = "{$abs_path_dir_peritaje}visualizador-taxi/documentos/TAXI_PERITAJE/{$data[$i]['placa']}/{$data[$i]['placa']}_ACTA_CIRCUNSTANCIADA.PDF";

                    $path_cedula = "{$abs_path_dir_peritaje}visualizador-taxi/documentos/TAXI_PERITAJE/{$data[$i]['placa']}/{$data[$i]['placa']}_CEDULA_DE_IDENTIFICACION.PDF";

                    $url_acta = preg_replace("/^" . preg_quote($abs_path_dir_peritaje, "/") . "/", $host, $path_acta);

                    $url_cedula = preg_replace("/^" . preg_quote($abs_path_dir_peritaje, "/") . "/", $host, $path_cedula);

                    if (file_exists($path_acta)) {

                        $acta_circunstanciada = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$url_acta}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Acta Circunstanciada</b></span><div>";
                    }

                    if (!file_exists($path_acta)) {

                        $acta_circunstanciada = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Acta Circunstanciada no encontrada</b></span><div>";
                    }

                    if (file_exists($path_cedula)) {

                        $cedula_de_identificacion = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$url_cedula}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Cédula de identificación</b></span><div>";
                    }

                    if (!file_exists($path_cedula)) {

                        $cedula_de_identificacion = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Cédula de identificación no encontrada</b></span><div>";
                    }

                    $data_processed[] = array(
                        "bloque_1" => "<div class=\"row\">{$acta_circunstanciada}{$cedula_de_identificacion}</div>",
                        "bloque_2" => "",
                        "bloque_3" => "",
                        "bloque_4" => ""
                    );
                }
            }
        }

        if (count($data_processed) == 0) {

            $concesion = array($placa);

            $this->load->view('not-found', compact("concesion"));

            return false;
        }

        $this->load->view('modal/content-modal-expediente', compact("data_processed"));
    }

    public function content_titulos_convenios(string $placa)
    {

        $data = $this->Read_data_model->get_titulos_convenios_by_placa($placa);

        $data_processed = array();

        $path_img = base_url("assets/img/pdf-2.PNG");

        $abs_path_dir_titulos_convenios = "/laragon/www/";

        $host = explode("/", base_url())[0] . "//" . explode("/", base_url())[2] . "/";

        if (is_array($data)) {

            if (count($data) > 0) {

                for ($i = 0; $i < count($data); $i++) {

                    $path_titulo_convenio = "{$abs_path_dir_titulos_convenios}visualizador-taxi/documentos/SUSTITUCION_TAXI/{$data[$i]['placa']}/{$data[$i]['placa']}_CONVENIO_TITULO.PDF";

                    $url_titulo_convenio = preg_replace("/^" . preg_quote($abs_path_dir_titulos_convenios, "/") . "/", $host, $path_titulo_convenio);

                    if (file_exists($path_titulo_convenio)) {

                        $titulo_convenio = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$url_titulo_convenio}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Título y Convenio de Adhesión</b></span><div>";
                    }

                    if (!file_exists($path_titulo_convenio)) {

                        $titulo_convenio = "<div class=\"col\" style=\"text-align: center;\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px; opacity: 0.5;\"><br><span><b>Acta Circunstanciada no encontrada</b></span><div>";
                    }

                    $data_processed[] = array(
                        "bloque_1" => "<div class=\"row\">{$titulo_convenio}</div>",
                        "bloque_2" => "",
                        "bloque_3" => "",
                        "bloque_4" => ""
                    );
                }
            }
        }

        if (count($data_processed) == 0) {

            $concesion = array($placa);

            $this->load->view('not-found', compact("concesion"));

            return false;
        }

        $this->load->view('modal/content-modal-expediente', compact("data_processed"));
    }

    /*
    Bono de combustible
    */

    function ss_preregistro_velodromo()
    {
        $data_processed = array();

        $data = $this->Read_data_model->get_sustitucion_ruta_velodromo();

        if (is_array($data)) {

            if (count($data) > 0) {

                for ($i = 0; $i < count($data); $i++) {

                    $data_processed[] = array(
                        "placa" => $data[$i]["placa"],
                        "preregistro" => "<button type=\"button\" class=\"btn btn-primary btn-preregistro\" data-toggle=\"modal\" data-target=\"#modal-provisional-peritaje-titulos-convenios\"><b><i class=\"fa-solid fa-table-list\"></i>&nbsp;&nbsp;Pre-registro</b></button>",
                        "velodromo" => "<button type=\"button\" class=\"btn btn-primary btn-velodromo\" data-toggle=\"modal\" data-target=\"#modal-provisional-peritaje-titulos-convenios\"><b><i class=\"fa-solid fa-calendar-check\"></i>&nbsp;&nbsp;Regularización</b></button>"

                    );
                }
            }
        }

        $ss = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data_processed),
            "iTotalDisplayRecords" => count($data_processed),
            "aaData" => $data_processed
        );

        echo json_encode($ss);
    }

    public function content_preregistro(string $placa)
    {

        $data = $this->Read_data_model->get_preregistro_by_placa($placa);

        $data_processed = array();

        $path_img = base_url("assets/img/pdf-2.PNG");

        $abs_path_dir_peritaje = "/laragon/www/";

        $host = explode("/", base_url())[0] . "//" . explode("/", base_url())[2] . "/";

        if (is_array($data)) {

            if (count($data) > 0) {

                for ($i = 0; $i < count($data); $i++) {

                    $url_documentos_preregistro = "{$host}/sustitucion-ruta/documentos/SUSTITUCION/{$data[$i]['placa']}";

                    $preregistro = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$url_documentos_preregistro}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Documentación obtenida del Pre-registro</b></span><div>";

                    //$url_documentos_velodromo = "{$host}/documentos-velodromo/VELODROMO/{$data[$i]['placa']}/{$data[$i]['placa']}.pdf";

                    //$velodromo = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$url_documentos_velodromo}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Documentación obtenida de la Regularización</b></span><div>";

                    $data_processed[] = array(
                        "bloque_1" => "<div class=\"row\">{$preregistro}</div>",
                        "bloque_2" => "",
                        "bloque_3" => "",
                        "bloque_4" => ""
                    );
                }
            }
        }

        if (count($data_processed) == 0) {

            $concesion = array($placa);

            $this->load->view('not-found', compact("concesion"));

            return false;
        }

        $this->load->view('modal/content-modal-expediente', compact("data_processed"));
    }

    public function content_velodromo(string $placa)
    {

        $data = $this->Read_data_model->get_velodromo_by_placa($placa);

        $data_processed = array();

        $path_img = base_url("assets/img/pdf-2.PNG");

        $abs_path_dir_peritaje = "/laragon/www/";

        $host = explode("/", base_url())[0] . "//" . explode("/", base_url())[2] . "/";

        if (is_array($data)) {

            if (count($data) > 0) {

                for ($i = 0; $i < count($data); $i++) {

                    $url_documentos_velodromo = "{$host}/documentos-velodromo/VELODROMO/{$data[$i]['placa']}/{$data[$i]['placa']}.pdf";

                    $velodromo = "<div class=\"col\" style=\"text-align: center;\"><a href=\"{$url_documentos_velodromo}\" target=\"_blank\"><img src=\"{$path_img}\" alt=\"file_pdf\" style=\"height:100px; width:100px;\"></a><br><span><b>Documentación obtenida de la Regularización</b></span><div>";

                    $data_processed[] = array(
                        "bloque_1" => "<div class=\"row\">{$velodromo}</div>",
                        "bloque_2" => "",
                        "bloque_3" => "",
                        "bloque_4" => ""
                    );
                }
            }
        }

        if (count($data_processed) == 0) {

            $concesion = array($placa);

            $this->load->view('not-found', compact("concesion"));

            return false;
        }

        $this->load->view('modal/content-modal-expediente', compact("data_processed"));
    }
}

/* End of file Read_data.php */
