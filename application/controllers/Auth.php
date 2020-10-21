<?php
class Auth extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Usuarios_Model', 'UM_Users'); //Carga el modelo
  }

  public function index(){
    if (isset($_SESSION['logged_in'])) {
      $this->load->view('index');
    } else {
      redirect(base_url().'Auth/login');
    }
  }

  public function login() {
    if (isset($_SESSION['logged_in'])) {
      redirect(base_url().'Admin/index');
    } else {
      if(!$this->input->post()){
        $title['title']= "Admin - Mare Nostrum";
        $this->load->view('admin/head-Admin', $title);
        $this->load->view('admin/login',null);
      } else {
        $this->form_validation->set_rules('usuario', 'Usuario','trim|xss_clean');
        $this->form_validation->set_rules('contraseña', 'Contraseña','trim|xss_clean|callback_auth');
        if ($this->form_validation->run() == FALSE) {
          $title['title']="Admin - Mare Nostrum";
          $this->load->view('admin/head-Admin', $title);
          $this->load->view('admin/login');
        } else {
          redirect(base_url().'Admin/index');
        }
      }
    }
  }

  public function auth($password){
    $username = $this->input->post('usuario');
    $user = $this->UM_Users->authenticate($username, $password);

    if ($user) {
      //Usuario valido
      $this->session->logged_in = array(
        'id' => $user->id,
        'nombre' => $user->nombre,
        'group' => $user->group
      );
      return TRUE;
    }
    $this->form_validation->set_message('auth','Usuario invalido: error usuario y/o contraseña');
    return FALSE;
  }

  public function logout(){
    unset($_SESSION['logged_in']);
    redirect(base_url().'Auth/login');
  }


}


?>
