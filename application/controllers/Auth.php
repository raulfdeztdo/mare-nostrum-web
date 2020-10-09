<?php
class Auth extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Usuarios_Model', 'UM_Users'); //Carga el modelo
  }

  public function index(){
    redirect(base_url().'Auth/login');
  }

  public function login() {
    //No hay datos de login
    if(!$this->input->post()){
      $menu['activo']="inicio";
      $this->load->view('head');
      $this->load->view('cabecera', $menu);
      $this->load->view('login',null);
    } else {
      $this->form_validation->set_rules('user', 'user','trim|xss_clean');
      $this->form_validation->set_rules('password_auth', 'password_auth','trim|xss_clean|callback_auth');
      if ($this->form_validation->run() == FALSE) {
        $menu['activo']="inicio";
        $title['title']="Inicio";
        $this->load->view('head', $title);
        $this->load->view('cabecera', $menu);
        $this->load->view('login');
        $datos2['ultimos3']=$this->UM_Cursos->ultimos3();
    		$this->load->view('index', $datos2);
    		$this->load->view('footer');
      } else {
        redirect(base_url().'Inicio/index');
      }
    }
  }

  public function auth($password){
    $username = $this->input->post('user');
    $user = $this->UM_Users->authenticate($username, $password);

    if ($user) {
      //Usuario valido
      $this->session->logged_in = array(
        'id' => $user->id,
        'nombre' => $user->nombre,
        'email' => $user->email,
        'group' => $user->group,
        'f_nac' => $user->f_nac
      );
      return TRUE;
    }
    $this->form_validation->set_message('auth','Usuario invalido: error usuario y/o contraseña');
    return FALSE;
  }

  public function logout(){
    unset($_SESSION['logged_in']);
    redirect(base_url().'Inicio/index');
  }


}


?>
