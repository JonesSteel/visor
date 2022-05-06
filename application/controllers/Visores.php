<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visores extends CI_Controller
{


	public function index()
	{
		$this->load->view('ruta/index');
	}
	//----------------------------------------------------------
	public function acciones_2020()
	{
		$this->load->view('accion_sociales_2020');
	}
	public function acciones_2021()
	{
		$this->load->view('accion_sociales_2021');
	}
	public function acciones_2022()
	{
		$this->load->view('accion_sociales_2022');
	}
	//----------------------------------------------------------
	public function sin_informacion()
	{
		$this->load->view('construyendo');
	}
	//----------------------------------------------------------
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
	public function preregistro()
	{
		$this->load->view('ruta/preregistro');
	}
	public function taxi_peritaje()
	{
		$this->load->view('ruta/taxi_peritaje');
	}
	public function taxi_convenio_titulo()
	{
		$this->load->view('ruta/taxi_convenios_titulos');
	}

	public function taxi_sustitucion_2021()
	{
		$this->load->view('taxi/taxi-sustitucion-2021');
	}

	public function bono_combustible()
	{
		$this->load->view('ruta/bono_combustible');
	}
}
