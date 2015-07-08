<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlador_archivo extends CI_Controller {

	public function index(){
	}
	
	public function BuscarNombre(){
		$this->load->model('archivo_modelo');
		$archivo_name = $this->input->post('archivo_buscar');
		$result = $this->archivo_modelo->BuscarNombre($archivo_name);
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 1)
		$this->load->view('archivos_vista',$data);
		else if($estado == 2)
		$this->load->view('archivos_vista_admin',$data);
		else
		$this->load->view('no_privilegios',$data);
		
	}
	
	public function BuscarUsuario(){
		$this->load->model('archivo_modelo');
		$usuario = $this->input->post('usuario_buscar');
		$result = $this->archivo_modelo->BuscarUsuario($usuario);
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 1)
		$this->load->view('archivos_vista',$data);
		else if($estado == 2)
		$this->load->view('archivos_vista_admin',$data);
		else
		$this->load->view('no_privilegios',$data);
		
	}
	
	public function guardarArchivo(){
		$this->load->model('archivo_modelo');
		$archivo_name = $this->input->post('archivo_name');
		$marcado = $this->input->post('marcado');
		$etiquetado = $this->input->post('etiquetado');
		$contenido = $this->input->post('contenido');
		$comentario = $this->input->post('comentario');
		$usuario = $this->session->userdata('usuario');
		$archivo_name = utf8_decode ($archivo_name);
		$this->archivo_modelo->guardarArchivoServidor($archivo_name,$contenido,$marcado,$etiquetado);
		$this->archivo_modelo->guardarArchivo($archivo_name,$contenido);
		$this->archivo_modelo->actualizarTabla($archivo_name,$marcado,$etiquetado,$usuario, $comentario);
	}
	
	public function MostrarArchivos(){
		$this->load->model('archivo_modelo');
		$result = $this->archivo_modelo->MostrarArchivos();
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 1)
		$this->load->view('archivos_vista',$data);
		else if($estado == 2)
		$this->load->view('archivos_vista_admin',$data);
		else
		$this->load->view('no_privilegios',$data);
		
	}
	
	public function EliminarArchivo($archivo_name){
		$this->load->model('archivo_modelo');
		$this->archivo_modelo->EliminarArchivo($archivo_name);
		$result = $this->archivo_modelo->MostrarArchivos();
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 2)
		$this->load->view('archivos_vista_admin',$data);
		else 
			$this->load->view('no_privilegios',$data);
	}
	
	public function MostrarArchivosUltEtiq(){
		$this->load->model('archivo_modelo');
		$result = $this->archivo_modelo->MostrarArchivosUltEtiq();
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 1)
		$this->load->view('archivos_vista',$data);
		else if($estado == 2)
		$this->load->view('archivos_vista_admin',$data);
		else
		$this->load->view('no_privilegios',$data);
	}
	
	public function MostrarArchivosUsuarioEtiq(){
		$this->load->model('archivo_modelo');
		$result = $this->archivo_modelo->MostrarArchivosUsuarioEtiq();
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 1)
		$this->load->view('archivos_vista',$data);
		else if($estado == 2)
		$this->load->view('archivos_vista_admin',$data);
		else
		$this->load->view('no_privilegios',$data);
	}
	
	public function MostrarArchivosUltMarc(){
		$this->load->model('archivo_modelo');
		$result = $this->archivo_modelo->MostrarArchivosUltMarc();
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 1)
		$this->load->view('archivos_vista',$data);
		else if($estado == 2)
		$this->load->view('archivos_vista_admin',$data);
		else
		$this->load->view('no_privilegios',$data);
	}
	
	public function MostrarArchivosUsuarioMarc(){
		$this->load->model('archivo_modelo');
		$result = $this->archivo_modelo->MostrarArchivosUsuarioMarc();
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 1)
		$this->load->view('archivos_vista',$data);
		else if($estado == 2)
		$this->load->view('archivos_vista_admin',$data);
		else
		$this->load->view('no_privilegios',$data);
	}
	
	public function CargarArchivo($archivo_name){
		$this->load->model('archivo_modelo');
		$archivo_name = utf8_decode(urldecode($archivo_name));
		$contenido = $this->archivo_modelo->CargarArchivo($archivo_name);
		$archivo = $contenido[0]->contenido;
		$archivo = utf8_decode($archivo);
		$data=array('archivo'=>$archivo, 'error' => NULL);
		$estado=$this->session->userdata('estado');
		if($estado != 1 && $estado != 2)
			$this->load->view('login_vista', $data);
		if($estado == 1)
			$this->load->view('principal',$data);
		if($estado == 2)
			$this->load->view('principal_admin',$data);
	}
	
}