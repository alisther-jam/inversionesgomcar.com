<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aceros extends CI_Controller {
	public function index()
	{
		$data["seccion"]="aceros";
		$this->front_views('body/aceros',$data);
	}
}
