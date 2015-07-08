<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlador_clave extends CI_Controller {

	function index(){}

	function cargarVistaClave(){
		$this->load->view('cambiar');
	}
	
	public function cambiarClave(){
		$this->load->model('clave_modelo');
		$clave = $this->input->post('clave');
		$nueva = $this->input->post('nueva');
		$usuario = $this->session->userdata('usuario');
		$this->clave_modelo->cambiarClave($usuario,$clave,$nueva);
		$estado=$this->session->userdata('estado');
			$data=array('archivo'=> 'Contraseña actualizada', 'error' => NULL);
			if($estado == 1)
				$this->load->view('principal',$data);
			if($estado == 2)
				$this->load->view('principal_admin',$data);
			if($estado == 0)
				$this->load->view('no_privilegios', $data);	
	}
}