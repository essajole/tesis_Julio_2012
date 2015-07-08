<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class cargarTXT extends CI_Controller{
	
	public function index(){
		$this->load->helper(array('form'));
		$this->load->view('principal', array('error' => ' ' ));
	}
		
		function do_upload(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'txt';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('principal',$error);
			
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('principal',$data);
			
			echo $data;
			}
		}
	}
	
?>