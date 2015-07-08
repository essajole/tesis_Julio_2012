<?php

class Upload extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index(){
		$archivo=NULL;
		$data=array('error' => NULL,'archivo'=>$archivo);
		$this->load->view('principal', $data);
	}

	function do_upload(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'xml|txt';
		$config['max_size']	= '1000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$archivo=NULL;
			$estado=$this->session->userdata('estado');
			$data=array('error' => $this->upload->display_errors(),'archivo'=>$archivo);
			if($estado == 1)
				$this->load->view('principal',$data);
			else if($estado == 2)
				$this->load->view('principal_admin',$data);
			else
				$this->load->view('no_privilegios',$data);
		}
		else
		{
			$temp = array('upload_data' => $this->upload->data());
			$arreglo = $temp["upload_data"]["full_path"];
			$archivo = file_get_contents($arreglo);
			$estado=$this->session->userdata('estado');
						
			$data = array('archivo' => $archivo, 'error' => NULL);
			if($estado == 1)
				$this->load->view('principal',$data);
			else if($estado == 2)
				$this->load->view('principal_admin',$data);
			else
				$this->load->view('no_privilegios',$data);
			
			
		}
	}
	
	
}
?>