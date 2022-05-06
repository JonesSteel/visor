<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function get_usuarios(string $usuario, string $contrasena)
    {

        /*
        Verificando que el usuario y la contraseña existan en la base de datos
        */

        $pass_db = "dgrpt_2020";

        $query_i = "SELECT
            usuarios.usuario,
            usuarios.nombre,
            usuarios.apellido_paterno,
            usuarios.apellido_materno,
            usuarios.estatus,
            areas.area_dgrpt,
            tipo_personal.tipo_personal,
            usuarios.fecha_baja
        FROM
            usuarios
        INNER JOIN areas ON usuarios.cve_area_dgrpt = areas.cve_area_dgrpt
        INNER JOIN tipo_personal ON usuarios.cve_tipo_personal = tipo_personal.cve_tipo_personal
        WHERE
            usuarios.usuario='$usuario' AND usuarios.contrasena=AES_ENCRYPT('$contrasena', '$pass_db')";

        $exec_query = $this->db->query($query_i);

        if (!$exec_query) {

            return false;
        }

        $result_query_i = $exec_query->result_array();

        return $result_query_i;
    }

    public function get_accesos(int $cve_aplicativo, string $usuario)
    {
        $query_i = "SELECT
            *
        FROM
            accesos
        WHERE
            usuario = '$usuario' AND cve_aplicativo = $cve_aplicativo";

        $exec_query = $this->db->query($query_i);

        if (!$exec_query) {

            return false;
        }

        $result_query_i = $exec_query->result_array();

        return $result_query_i;
    }

    public function set_historial_acceso(string $fields_historial_acceso, string $values_historial_acceso)
    {

        $query_i = "INSERT INTO historial_acceso ($fields_historial_acceso) VALUES ($values_historial_acceso)";

        $exec_query = $this->db->query($query_i);

        return $exec_query;
    }

    public function set_usuarios(string $fields_usuarios, string $values_usuarios)
    {
        $query_i = "INSERT INTO usuario ($fields_usuarios) VALUES ($values_usuarios)";

        $exec_query = $this->db->query($query_i);

        return $exec_query;
    }

    public function update_historial_acceso(string $set_historial_acceso, string $condition)
    {
        $query_i = "UPDATE historial_acceso SET $set_historial_acceso WHERE $condition";

        $exec_query = $this->db->query($query_i);

        return $exec_query;
    }
}
