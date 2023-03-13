<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cotizacion extends CI_Controller {
	public function index()
	{
		$data["seccion"]="cotizacion";
		$this->front_views('body/cotizacion',$data);
	}
}
