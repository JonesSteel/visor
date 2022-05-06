<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Read_data_model extends CI_Controller
{

    /*
    Taxi
    */

    public function get_peritaje_provisional_titulos_convenios()
    {

        $db = $this->load->database("sustitucion_taxi", TRUE);

        /*
        Obteniendo los registros únicos de las tablas: peritaje, provisional y titulos_convenios
        */

        $query_i = "SELECT
            placa
        FROM
            provisional
        UNION
        SELECT
            placa
        FROM
            peritaje
        UNION
        SELECT
            placa
        FROM
            titulos_convenios";

        $exec_query_i = $db->query($query_i);

        if (!$query_i) {

            return false;
        }

        $result_query_i = $exec_query_i->result_array();

        return $result_query_i;
    }

    public function get_provisional_by_placa(string $placa)
    {

        $db = $this->load->database("sustitucion_taxi", TRUE);

        $query_i = "SELECT * FROM provisional WHERE placa='$placa'";

        $exec_query_i = $db->query($query_i);

        if (!$exec_query_i) {

            return false;
        }

        $result_query_i = $exec_query_i->result_array();

        return $result_query_i;
    }

    public function get_peritaje_by_placa(string $placa)
    {
        $db = $this->load->database("sustitucion_taxi", TRUE);

        $query_i = "SELECT * FROM peritaje WHERE placa='$placa'";

        $exec_query_i = $db->query($query_i);

        if (!$exec_query_i) {

            return false;
        }

        $result_query_i = $exec_query_i->result_array();

        return $result_query_i;
    }

    public function get_titulos_convenios_by_placa(string $placa)
    {
        $db = $this->load->database("sustitucion_taxi", TRUE);

        $query_i = "SELECT * FROM titulos_convenios WHERE placa='$placa'";

        $exec_query_i = $db->query($query_i);

        if (!$exec_query_i) {

            return false;
        }

        $result_query_i = $exec_query_i->result_array();

        return $result_query_i;
    }

    /*
    Bono de combustible
    */

    public function get_sustitucion_ruta_velodromo()
    {

        $db = $this->load->database("sustitucion_ruta", TRUE);

        $query_i = "SELECT
            placa
        FROM
            placas_ruta
        UNION
        SELECT
            placa
        FROM
            placas_velodromo";

        $exec_query_i = $db->query($query_i);

        if (!$exec_query_i) {

            return false;
        }

        $result_query_i = $exec_query_i->result_array();

        return $result_query_i;
    }

    public function get_preregistro_by_placa(string $placa)
    {

        $db = $this->load->database("sustitucion_ruta", TRUE);

        $query_i = "SELECT * FROM placas_ruta WHERE placa='$placa'";

        $exec_query_i = $db->query($query_i);

        if (!$exec_query_i) {

            return false;
        }

        $result_query_i = $exec_query_i->result_array();

        return $result_query_i;
    }

    public function get_velodromo_by_placa(string $placa)
    {
        $db = $this->load->database("sustitucion_ruta", TRUE);

        $query_i = "SELECT * FROM placas_velodromo WHERE placa='$placa'";

        $exec_query_i = $db->query($query_i);

        if (!$exec_query_i) {

            return false;
        }

        $result_query_i = $exec_query_i->result_array();

        return $result_query_i;
    }
}

/* End of file Read_data_model.php */
