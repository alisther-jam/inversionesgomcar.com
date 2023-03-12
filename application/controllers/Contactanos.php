<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactanos extends CI_Controller {
	public function index()
	{
		$data["seccion"]="contactanos";
		$this->front_views('body/contactanos',$data);
	}
	public function mail()
	{
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$telefono = $this->input->post("telefono");
		$asunt = $this->input->post("asunto");
		$message = $this->input->post("message");

		$asunto = "(Contáctenos) Página web Gomcar - ".$asunt;
				$contenido = "";
				$contenido .= "<html><head></head><body>";		
				$contenido .= "<p>============================================================</p>";
				$contenido .= "<h2>Contáctenos: Gomcar</h2>";
				$contenido .= "<p>============================================================</p>";
				$contenido .= "<p>Nombre y Apellidos: <strong>".$name."</strong></p>";
				$contenido .= "<p>Correo: <strong>".$email."</strong></p>";
				$contenido .= "<p>Telefono: <strong>".$telefono."</strong></p>";
				
                $contenido .= "<p>Asunto: <strong>".$asunt."</strong></p>";
				$contenido .= "<p>Comentario: <strong>".$message."</strong></p>";
				$contenido .= "<p>============================================================</p>";
				$contenido .= "</body></html>";	
				//$destino = 'informes@inversionesgomcar.com';
				$destino = 'informes@inversionesgomcar.com';
			    
				//enviando el correo
				$this->load->library('email');
				$configuraciones['mailtype'] = 'html';
				$this->email->initialize($configuraciones);
				$this->email->from($email, $name);
				$this->email->to($destino);
				
				$this->email->subject($asunt);
				$this->email->message($contenido);
				$confirmacion = $this->email->send();
				if ($confirmacion) {
					echo 1;
				}else{
					echo 0;
				}
	}
}
