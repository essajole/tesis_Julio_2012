<?php
 
class clave_modelo extends CI_Model {

function cambiarClave($usuario,$clave,$nueva){
		mysql_query("SET NAMES 'utf8'");
		$this->db->select('clave')->from('usuario')->where('usuario',$usuario)->where('clave',$clave);

		$data = array(
		'clave' => $nueva
		);	
		$this->db->update('usuario', $data);
		
	}
}