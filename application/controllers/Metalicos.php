<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metalicos extends CI_Controller {
	public function index()
	{
		$data["seccion"]="metalicos";
		$this->front_views('body/metalicos',$data);
	}
}
