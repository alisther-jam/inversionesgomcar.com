<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {
	public function index()
	{
		$data["seccion"]="nosotros";
		$this->front_views('body/nosotros',$data);
	}
}
