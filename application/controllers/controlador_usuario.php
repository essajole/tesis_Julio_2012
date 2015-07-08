<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlador_usuario extends CI_Controller {

	public function index(){}

	public function InsertarUsuario(){
		$this->load->model('usuario_modelo');
		$nombre = $this->input->post('nombre');
		$clave = $this->input->post('clave');
		$apellidos = $this->input->post('apellidos');
		$usuario = $this->input->post('usuario');
		$correo = $this->input->post('correo');
		$this->usuario_modelo->InsertarUsuario($nombre,$clave,$apellidos,$usuario,$fecha,$correo,0);
	}
	
	public function MostrarUsuariosAprobar(){
		$this->load->model('usuario_modelo');
		$result = $this->usuario_modelo->MostrarUsuariosAprobar();
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 2)
		$this->load->view('controlador_usuario',$data);
		else 
			$this->load->view('no_privilegios',$data);
	}
	
	public function RechazarUsuario($usuario){
		$this->load->model('usuario_modelo');
		$this->usuario_modelo->RechazarUsuario($usuario);
		$result = $this->usuario_modelo->MostrarUsuariosAprobar();
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 2)
		$this->load->view('controlador_usuario',$data);
		else 
			$this->load->view('no_privilegios',$data);
	}
	
	public function AprobarUsuario($usuario){
		$this->load->model('usuario_modelo');
		$this->usuario_modelo->AprobarUsuario($usuario);
		$result = $this->usuario_modelo->MostrarUsuariosAprobar();
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 2)
		$this->load->view('controlador_usuario',$data);
		else 
			$this->load->view('no_privilegios',$data);
	}
}