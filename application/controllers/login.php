<?php

class login extends Controller {

  function Principal(){
    parent::Controller();
    $this->load->helper(array('url', 'form'));
    $this->load->library('form_validation');
  }
 
  // Funci�n index. Comprueba si existe la sesi�n de usuario
  function index()
  {
    // si no existe la sesi�n con la variable 'usuario_id'
    if (!$this->session->userdata('usuario_id')){
      // redirigimos a la funci�n login
      redirect('principal/login', 'refresh');
    } else {
      // en caso contrario cargamos la vista principal
      $this->load->view('principal_view');
  }
 
  // Funci�n login. Verifica el usuario/contrase�a
  function login()
  {
    // si se ha enviado el formulario
    if ($this->input->post('usuario')){
      // recogemos las variables 'usuario' y 'contrasena'
      $usuario = $this->input->post('usuario');
      $contrasena = sha1($this->input->post('contrasena'));
      // cargamos el modelo para verificar el usuario/contrase�a
      $this->load->model('Autenticacion_Model');
      // si el usuario y contrase�a son correctos
      if ($this->Admin_Model->verificaUsuario($usuario, $contrasena)){
        // creamos un array con las variables de sesi�n 'usuario_id' y 'login_ok'
        $datasession = array(
          'usuario_id'  => '$usuario',
          'login_ok' => TRUE
        );
        // creamos la sesi�n con dichas variables
        $this->session->set_userdata($datasession);
        // y redirigimos al controlador principal
        redirect('principal', 'refresh');
      } else {
        // si el usuario y contrase�a son incorrectos
        $this->session->set_flashdata('error', 'El usuario o contrase�a son incorrectos.');
      }
    } else {
      // cargamos el formulario de login
      $this->load->view('autenticacion/form_login');
    }
  }
 
  // Funci�n logout. Elimina las variables de sesi�n y redirige al controlador principal
  function logout()
  {
    // creamos un array con las variables de sesi�n en blanco
    $datasession = array('usuario_id' => '', 'logged_in' => '');
    // y eliminamos la sesi�n
    $this->session->unset_userdata($datasession);
    // redirigimos al controlador principal
    redirect('principal', 'refresh');
  }
 
}