<?php
	class archivo_modelo extends CI_Model{
	
		function guardarArchivo($archivo_name,$contenido){
			mysql_query("SET NAMES 'utf8'");
			$archivo_name = utf8_encode($archivo_name);
			$data = array(
				'archivo_name' 	=> $archivo_name,
				'contenido'		=> $contenido,
			);
							
			$this->db->select('*')->from('archivo')->where('archivo_name',$archivo_name );
			$query = $this->db->get();

			if($query->num_rows>0){
				//update
				$this->db->where('archivo_name',$archivo_name);
				$this->db->update('archivo', $data);
				
			}
			
			else{
			//insert
			echo $this->db->insert('archivo', $data); 
			return TRUE;
			}
		}
		
		function guardarArchivoServidor($archivo_name,$contenido,$marcado,$etiquetado){
			//$archivo_name = utf8_decode($archivo_name);
			if($marcado && $etiquetado)
			$arc = "Archivos/ambos/".$archivo_name.".xml";
			if(!$marcado && $etiquetado)
			$arc = "Archivos/etiquetados/".$archivo_name.".xml";
			if($marcado && !$etiquetado)
			$arc = "Archivos/marcados/".$archivo_name.".xml";
			if(!$marcado && !$etiquetado)
			$arc = "Archivos/ninguno/".$archivo_name.".xml";
			
			$file = fopen($arc, "w+");

			fwrite($file, "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>");
			fwrite($file, "<doc>");
			fwrite($file, $contenido);
			fwrite($file, "</doc>");
			fclose($file);
		}
		
		function CargarArchivo($archivo_name){

			mysql_query("SET NAMES 'utf8'");
			$archivo_name = utf8_encode ( urldecode($archivo_name));
			$this->db->select('contenido')->from('archivo')->where('archivo_name', $archivo_name);
			$query = $this->db->get();
			if($query->num_rows>0){
				$result=$query->result();
				return $result;
			}
			else{
				return FALSE;
			}
		}
		
		function actualizarTabla($archivo_name,$marcado,$etiquetado,$usuario,$comentario){
			mysql_query("SET NAMES 'utf8'");
			$archivo_name = utf8_encode (urldecode($archivo_name));
			if($marcado && $etiquetado){
				$data = array(
				'archivo_name' 	=> $archivo_name,
				'ult_marc' 		=> date("Y-m-d H:i"),
				'ult_etiq' 		=> date("Y-m-d H:i"),
				'usuario_marc' 	=> $usuario,
				'usuario_etiq' 	=> $usuario,
				);
				
				$data0 = array(
				'nombre_archivo' 	=> $archivo_name,
				'accion' 			=> "Etiquetado + Marcado",
				'fecha' 			=> date("Y-m-d H:i"),
				'usuario_bitacora' 	=> $usuario,
				'comentario'		=> $comentario,
				);
			}
			if($etiquetado && !$marcado){
				$data = array(
				'archivo_name' 	=> $archivo_name,
				'ult_etiq' 		=> date("Y-m-d"),
				'usuario_etiq' 	=> $usuario,
				);
				
				$data0 = array(
				'nombre_archivo' 	=> $archivo_name,
				'accion' 			=> "Etiquetado",
				'fecha' 			=> date("Y-m-d H:i"),
				'usuario_bitacora' 	=> $usuario,
				'comentario'		=> $comentario,
				);
			}
			
			if(!$etiquetado && $marcado){
				$data = array(
				'archivo_name' 	=> $archivo_name,
				'ult_marc' 		=> date("Y-m-d"),
				'usuario_marc' 	=> $usuario,
				);
				
				$data0 = array(
				'nombre_archivo' 	=> $archivo_name,
				'accion' 			=> "Marcado",
				'fecha' 			=> date("Y-m-d H:i"),
				'usuario_bitacora' 	=> $usuario,
				'comentario'		=> $comentario,
				);
			}
			
			if(!$etiquetado && !$marcado){
				$data = array(
				'archivo_name' 	=> $archivo_name,
				);
				
				$data0 = array(
				'nombre_archivo' 	=> $archivo_name,
				'accion' 			=> "Lectura",
				'fecha' 			=> date("Y-m-d H:i"),
				'usuario_bitacora' 	=> $usuario,
				'comentario'		=> $comentario,
				);
			}
						
			$this->db->select('*')->from('tabla')->where('archivo_name',$archivo_name );
			$query = $this->db->get();
			if($query->num_rows>0){
				//update
				$this->db->where('archivo_name',$archivo_name);
				$this->db->update('tabla', $data);
				$this->db->insert('bitacora', $data0);
			}
			
			//insert
			$this->db->insert('tabla', $data);
			$this->db->insert('bitacora', $data0);
			return TRUE;
		}
		
		function MostrarArchivos(){
			mysql_query("SET NAMES 'utf8'");
			$this->db->select('*')->from('tabla');
			$query = $this->db->get();
			if($query->num_rows==0){
				
			}
			else{
				$result=$query->result();
				return $result;
			}
		}
		
		function BuscarNombre($archivo_name){
			mysql_query("SET NAMES 'utf8'");
			$this->db->select('*')->from('tabla')->like('archivo_name',$archivo_name);
			$query = $this->db->get();
			if($query->num_rows==0){
				
			}
			else{
				$result=$query->result();
				return $result;
			}
		}
		
		function EliminarArchivo($archivo_name){
			mysql_query("SET NAMES 'utf8'");
			$archivo_name = urldecode($archivo_name);
			$this->db->where('archivo_name', $archivo_name);
			$this->db->delete('archivo'); 
			$this->db->where('archivo_name', $archivo_name);
			$this->db->delete('tabla'); 
	}
		
		function BuscarUsuario($usuario){
			mysql_query("SET NAMES 'utf8'");
			$this->db->select('*')->from('tabla')->where('usuario_etiq', $usuario)->or_where('usuario_marc', $usuario);
			$query = $this->db->get();
			if($query->num_rows==0){
				
			}
			else{
				$result=$query->result();
				return $result;
			}
		}
		
		function MostrarArchivosUltEtiq(){
			mysql_query("SET NAMES 'utf8'");
			$this->db->select('*')->from('tabla')->order_by('ult_etiq');
			$query = $this->db->get();
			if($query->num_rows==0){
				
			}
			else{
				$result=$query->result();
				return $result;
			}
		}
		
		function MostrarArchivosUsuarioEtiq(){
			mysql_query("SET NAMES 'utf8'");
			$this->db->select('*')->from('tabla')->order_by('usuario_etiq');
			$query = $this->db->get();
			if($query->num_rows==0){
				
			}
			else{
				$result=$query->result();
				return $result;
			}
		}
		
		function MostrarArchivosUltMarc(){
			mysql_query("SET NAMES 'utf8'");
			$this->db->select('*')->from('tabla')->order_by('ult_marc');
			$query = $this->db->get();
			if($query->num_rows==0){
				
			}
			else{
				$result=$query->result();
				return $result;
			}
		}
		
		function MostrarArchivosUsuarioMarc(){
			mysql_query("SET NAMES 'utf8'");
			$this->db->select('*')->from('tabla')->order_by('usuario_marc');
			$query = $this->db->get();
			if($query->num_rows==0){
				
			}
			else{
				$result=$query->result();
				return $result;
			}
		}
	}
?>