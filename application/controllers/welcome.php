<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()	{
		$this->load->model('usuario_modelo');
		$archivo=NULL;
		$data=array('archivo'=>$archivo, 'error' => NULL);
		$estado=$this->session->userdata('estado');
		if($estado != 1 && $estado != 2)
			$this->load->view('login_vista', $data);
		if($estado == 1)
			$this->load->view('principal',$data);
		if($estado == 2)
			$this->load->view('principal_admin',$data);
		
		}
	
	public function insertar(){
		$this->load->model('usuario_modelo');
		$nombre = $this->input->post('nombre');
		$clave = $this->input->post('clave');
		$apellidos = $this->input->post('apellidos');
		$fecha = $this->input->post('fecha');
		$usuario = $this->input->post('usuario');
		$correo = $this->input->post('correo');
		$this->usuario_modelo->InsertarUsuario($nombre,$clave,$apellidos,$usuario,$fecha,$correo,0);
	}
	
	
}
