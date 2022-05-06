<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Eliminar extends CI_Controller
{

    public function index()
    {

        $c = curl_init('http://10.5.95.91/sustitucion-ruta/documentos/SUSTITUCION/0010001/');
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt(... other options you want...)

        $html = curl_exec($c);

        if (curl_error($c))
            die(curl_error($c));

        // Get the status code
        $status = curl_getinfo($c, CURLINFO_HTTP_CODE);

        curl_close($c);

        echo htmlentities($html);
    }
}

/* End of file Eliminar.php */
