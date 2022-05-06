<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index(int $app_id)
    {
        $id_app = array(
            1 => 'CAMBIO DE SEMÁFORO 2022',
            2 => 'BONO DE COMBUSTIBLE',
            3 => 'SUSTITUCIÓN DE TAXI 2021',
            4 => 'CUAUTEPEC FASE 1',
            5 => 'MANO ALZADA FASE 1'
        );

        $app_selected = array(
            "app" => $id_app[$app_id],
            "cve_aplicativo" => $app_id
        );

        $app_selected[] = $id_app[$app_id];

        $this->load->view('login',compact("app_selected"));
    }

    public function is_valid_user_pass()
    {

        header('Content-type: application/json; charset=utf-8');

        if (
            !isset($_POST["usuario"]) ||
            !isset($_POST["contrasena"]) ||
            !isset($_POST["cve_aplicativo"])
        ) {

            die("¡Acceso denegado!");
        }

        date_default_timezone_set("America/Mexico_City");

        $_POST["usuario"] = preg_replace("/\'|\"/", "", $_POST["usuario"]);

        $_POST["contrasena"] = preg_replace("/\'|\"/", "", $_POST["contrasena"]);

        $_POST["cve_aplicativo"] = preg_replace("/\'|\"/", "", $_POST["cve_aplicativo"]);

        /*
        Verificando que el usuario y la contrseña existan en la tabla usuarios
        */

        $status_query = array();

        $data_usuarios = $this->Login_model->get_usuarios(
            $_POST["usuario"],
            $_POST["contrasena"]
        );

        if ($data_usuarios === false) {

            /*
            Ocurrió un error con la base de datos o el servidor
            */

            $status_query = array(
                "error" => 1,
                "message" => "Ocurrió un error con el servidor",
                "is_valid_user_pass" => false,
                "data_session" => array(),
                "session_id" => null
            );

            echo json_encode(
                $status_query,
                JSON_PRETTY_PRINT
            );

            return false;
        }

        if (count($data_usuarios) == 0) {

            /*
            El usuario o la contraseña no existen en la tabla usuarios
            */

            $status_query = array(
                "error" => 0,
                "message" => "Usuario y/o contraseña incorrectos",
                "is_valid_user_pass" => false,
                "data_session" => array(),
                "session_id" => null
            );

            echo json_encode(
                $status_query,
                JSON_PRETTY_PRINT
            );

            return false;
        }

        if (count($data_usuarios) > 0) {

            /*
            El usuario y la contraseña existen en la tabla usuarios
            */

            /*
            Comprando que el usuario este activo
            */

            $estatus = $data_usuarios[0]["estatus"];

            if ($estatus == "B") {

                $status_query = array(
                    "error" => 0,
                    "message" => "El usuario fue dado de baja, consulta al administrador del sistema",
                    "is_valid_user_pass" => false,
                    "data_session" => array(),
                    "session_id" => null
                );

                echo json_encode(
                    $status_query,
                    JSON_PRETTY_PRINT
                );

                return false;
            }

            /*
            Comprando que el usuario tenga acceso al aplicativo desde el cual envía la información
            */

            $data_accesos = $this->Login_model->get_accesos(
                $_POST["cve_aplicativo"],
                $_POST["usuario"]
            );

            if ($data_accesos === false) {

                $status_query = array(
                    "error" => 1,
                    "message" => "Ocurrió un error con el servidor",
                    "is_valid_user_pass" => false,
                    "data_session" => array(),
                    "session_id" => null
                );

                echo json_encode(
                    $status_query,
                    JSON_PRETTY_PRINT
                );

                return false;
            }

            if (count($data_accesos) == 0) {

                $status_query = array(
                    "error" => 0,
                    "message" => "Acceso denegado",
                    "is_valid_user_pass" => false,
                    "data_session" => array(),
                    "session_id" => null
                );

                echo json_encode(
                    $status_query,
                    JSON_PRETTY_PRINT
                );

                return false;
            }

            if (count($data_accesos) > 0) {

                /*
                Cambiando estatus a session_id
                */

                $change_status = $this->Login_model->update_historial_acceso(
                    "estatus_session='0'",
                    "usuario='{$_POST["usuario"]}' AND cve_aplicativo={$_POST["cve_aplicativo"]}"
                );

                if (!$change_status) {

                    $status_query = array(
                        "error" => 1,
                        "message" => "Ocurrió un error al tratar de generar la sesión",
                        "is_valid_user_pass" => false,
                        "data_session" => array(),
                        "session_id" => null
                    );

                    echo json_encode(
                        $status_query,
                        JSON_PRETTY_PRINT
                    );

                    return false;
                }

                /*
                Las credenciales del usuario existen en la tabla usuarios y tiene permiso de acceder a la app
                */

                /*
                Registrando acceso en la tabla historial_acceso
                */

                $ultimo_acceso = date("Y-m-d H:i:s");

                $id_session = $this->create_key_file();

                $fields_historial_acceso = "usuario,cve_aplicativo,utlimo_acceso,id_session,estatus_session";

                $values_historial_acceso = "'{$_POST["usuario"]}',{$_POST["cve_aplicativo"]},'{$ultimo_acceso}','{$id_session}','1'";

                $set_historial_acceso = $this->Login_model->set_historial_acceso(
                    $fields_historial_acceso,
                    $values_historial_acceso
                );

                if (!$set_historial_acceso) {

                    /*
                    Ocurrió un error al tratar de registrar el acceso del usuario
                    */

                    $status_query = array(
                        "error" => 1,
                        "message" => "Ocurrió un error al tratar de generar la sesión",
                        "is_valid_user_pass" => false,
                        "data_session" => array(),
                        "session_id" => null
                    );

                    echo json_encode(
                        $status_query,
                        JSON_PRETTY_PRINT
                    );

                    return false;
                }

                $status_query = array(
                    "error" => 0,
                    "message" => "",
                    "is_valid_user_pass" => true,
                    "data_session" => $data_usuarios,
                    "session_id" => $id_session
                );

                echo json_encode(
                    $status_query,
                    JSON_PRETTY_PRINT
                );

                return false;
            }
        }
    }

    private function create_key_file()
    {
        $key_file = array();

        $lim = rand(10, 20);

        for ($i = 0; $i < $lim; $i++) {

            $key_file[] = chr(rand(ord('a'), ord('z')));

            $key_file[] = rand(0, 9);
        }

        return implode("", $key_file);
    }
}
