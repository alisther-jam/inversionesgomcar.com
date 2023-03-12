<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {
	public function index()
	{
		$data["seccion"]="servicios";
		$this->front_views('body/servicios',$data);
	}
}
