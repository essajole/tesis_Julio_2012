<?php
 
class autenticacion_modelo extends Model {
 
  function autenticacion_modelo()
  {
    parent::Model();
  }
 
  function verificaUsuario($usuario, $contrasena){
	mysql_query("SET NAMES 'utf8'");
    // creamos la select
    // SELECT `usuario`, `contrasena`
    // WHERE `usuario` = $usuario AND
    // `contrasena` = $contrasena
    // FROM `ci_usuarios`
    // LIMIT 1
    $this->db->select('id, usuario');
    $this->db->where('usuario', $usuario);
    $this->db->where('contrasena', $contrasena);
    $this->db->limit(1);
    $query = $this->db->get('usuarios');
    // si el resultado de la query es positivo
    if ($query->num_rows() > 0){
      // devolvemos TRUE
      return TRUE;
    // si el resultado de la query no es positivo
    } else {
      // devolvemos FALSE
      return FALSE;
    }
  }
 
}
