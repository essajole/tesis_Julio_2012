<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlador_bitacora extends CI_Controller {

	public function index(){
	}
	
	public function MostrarBitacoras($nombre_archivo){
		$this->load->model('bitacora_modelo');
		$nombre_archivo = utf8_encode (urldecode($nombre_archivo));
		$result = $this->bitacora_modelo->MostrarBitacoras($nombre_archivo);
		$data = array('result' => $result);
		$estado=$this->session->userdata('estado');
		if($estado == 1)
		$this->load->view('bitacora_view',$data);
		else if($estado == 2)
		$this->load->view('bitacora_view_admin',$data);
		else
		$this->load->view('no_privilegios',$data);
	}
}