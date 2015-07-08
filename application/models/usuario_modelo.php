<?php
	class usuario_modelo extends CI_Model{
		function InsertarUsuario($nombre, $clave, $apellidos, $usuario, $fecha, $correo, $estado){
			mysql_query("SET NAMES 'utf8'");
			$data = array(
			'nombre' 	=> $nombre,
			'clave' 	=> $clave,
			'apellidos' => $apellidos,
			'usuario'	=> $usuario,
			'correo'	=> $correo,
			'estado'	=> $estado
			);
			$this->db->select('*')->from('usuario')->where('usuario',$usuario ) ;
			$query = $this->db->get();
			if($query->num_rows>0){
				return FALSE;
			}
			
			//else{
			echo $this->db->insert('usuario', $data); 
			return TRUE;
			//}
		}
	
	
	
	function MostrarUsuariosAprobar(){
		mysql_query("SET NAMES 'utf8'");
		$this->db->select('*')->from('usuario')->where('estado',0);
		$query = $this->db->get();
		if($query->num_rows==0){
			
		}
		else{
			$result=$query->result();
			return $result;
		}
	}
	
	function RechazarUsuario($usuario){
		mysql_query("SET NAMES 'utf8'");
		$this->db->where('usuario', $usuario);
		$this->db->delete('usuario'); 
	}
	
	function AprobarUsuario($usuario){
		mysql_query("SET NAMES 'utf8'");
		$data = array(
		'estado' => "1"
		);
		$this->db->where('usuario', $usuario);
		$this->db->update('usuario', $data); 
	}
}
?>