<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlador_login extends CI_Controller {

	function index(){}
	
	function verificaUsuario(){
		$this->load->model('login_modelo');
		$usuario = $this->input->post('usuario');
		$clave = $this->input->post('clave');
		$band= $this->login_modelo->verificaUsuario($usuario,$clave);
		if($band){
			$this->session->set_userdata('usuario', $usuario);
			$this->session->set_userdata('clave', $clave);
			$estado = $this->login_modelo->obtenerEstado($usuario);
			$this->session->set_userdata('estado', $estado);
			
			$estado=$this->session->userdata('estado');
			$archivo = NULL;
			$data=array('archivo'=>$archivo, 'error' => NULL);
			if($estado == 1)
				$this->load->view('principal',$data);
			if($estado == 2)
				$this->load->view('principal_admin',$data);
			if($estado == 0)
				$this->load->view('no_privilegios', $data);
		}
		else{
			$this->load->view('no_registrado');
		}
	}
		
	
	function cargarVista(){
		$this->load->view('login_vista');
	}
	
	function desconectarse(){
		$arreglo_items = array
		('usuario' => '',
		'estado' => '');
		$this->session->unset_userdata($arreglo_items);
		$this->load->view('login_vista');
	}
}