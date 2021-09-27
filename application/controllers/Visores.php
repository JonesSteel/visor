<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visores extends CI_Controller {

		
	public function index()
	{
		$this->load->view('ruta/index');
               // $this->load->view('test');
                   
                
	}

    public function sustitucion()
	{
		$this->load->view('ruta/sustitucion');
                 
	}
    public function velodromo_regularizacion()
	{
		$this->load->view('ruta/velodromo_regularizacion');
                 
	}
    public function taxi_sustitucion()
	{
		$this->load->view('ruta/taxi_sustitucion');
                 
	}

}