<?php
	class bitacora_modelo extends CI_Model{

	function MostrarBitacoras($nombre_archivo){
			$nombre_archivo = utf8_decode (urldecode($nombre_archivo));
			$this->db->select('*')->from('bitacora')->where('nombre_archivo', $nombre_archivo);
			$query = $this->db->get();
			if($query->num_rows==0){

			}
			else{
				$result=$query->result();
				return $result;
			}
		}
	}