<?php
 
class login_modelo extends CI_Model {
 
  function verificaUsuario($usuario, $clave){
	mysql_query("SET NAMES 'utf8'");
    $this->db->select('*')->from('usuario')->where('usuario', $usuario)->where('clave', $clave);
    $this->db->limit(1);
    $query = $this->db->get(	);
   
    if ($query->num_rows() > 0){
		
		return TRUE;
		
    } else {

		return FALSE;
    }
  }
  
	function obtenerEstado($usuario){
		mysql_query("SET NAMES 'utf8'");
		$this->db->select('estado');
		$this->db->where('usuario',$usuario);
		$query = $this->db->get('usuario');
		
		if($query->num_rows() > 0){
			foreach($query->result() as $result){				
				return $result->estado;
			}
		}
	}
  
	
}
