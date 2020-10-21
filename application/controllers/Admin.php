<?php
  class Admin extends CI_Controller {

    public function __construct() {       // Define el constructor
      parent::__construct();              // Invoca al constructor de la clase superior
      $this->load->model('Usuarios_Model', 'UM_Users'); //Carga el modelo
      $this->load->model('Apartamentos_Model', 'UM_Ap'); //Carga el modelo
      $this->load->model('Reservas_Model', 'UM_Res'); //Carga el modelo
      $this->load->model('Mensajes_Model', 'UM_Msg'); //Carga el modelo

    }

    public function index(){
      if (isset($_SESSION['logged_in'])) {
        $title['title'] = 'Admin - Mare Nostrum';
        $this->load->view('admin/head-Admin', $title);
        $datos['reservas'] = $this->UM_Res->getLast5();
        $datos['apartamentos'] = $this->UM_Ap->getLast5();
        if (isset($this->db)) {
          $datos['dbDatos'] = $this->db;
        }
        $datos['configDatos'] = array(
          'url' => base_url(),
          'default_controller' => 'Inicio',
          'ci_version' => CI_VERSION,
          'BDversion' => $this->UM_Users->getVersionSQL(),
          'user' => $_SESSION['logged_in']['nombre'],
        );
        if ($this->UM_Msg->selectNoLeidos()) {
          $datos['NoLeidos'] = $this->UM_Msg->selectNoLeidos();
        }
        $this->load->view('admin/cabfooter1', $datos);
        $this->load->view('admin/index-Admin', $datos);
        $this->load->view('admin/cabfooter2');
      } else {
        redirect(base_url().'Auth/login');
      }
    }

    public function checkAlta($usuario){
      $new_user = array(
        'nombre' => $this->input->post('usuario'),
        'group' => $this->input->post('group'),
        'password' => hash('sha256', $this->input->post('password'))
      );

      if (!$this->UM_Users->checkNombreUsuario($new_user['nombre'])) {
        if (!$this->UM_Users->checkEmail($new_user['email'])) {
          $this->UM_Users->creauser($new_user);
          return TRUE;
        } else {
          $this->form_validation->set_message('checkAlta','Email inválido: ya existe un usuario con ese email');
          return FALSE;
        }
      } else{
        $this->form_validation->set_message('checkAlta','Usuario inválido: ya existe un usuario con ese nombre');
        return FALSE;
      }

    }

    public function altaUsuario(){
      if (!$this->input->post() && (!(isset($_SESSION['logged_in'])))) {
        $menu['activo']="inicio";
        $title['title']="Alta usuario - Mare Nostrum";
        $this->load->view('head', $title);
        $this->load->view('cabecera', $menu);
        $this->load->view('altausuario', null);
      } else {
        if (!(isset($_SESSION['logged_in']))) {
          $this->form_validation->set_rules('usuario', 'NombreUsuario','trim|required|xss_clean|callback_checkAlta');
          $this->form_validation->set_rules('group', 'Grupo','trim|required|xss_clean');
          $this->form_validation->set_rules('password', 'password','trim|required|xss_clean');
          $this->form_validation->set_rules('password2', 'password2','trim|required|xss_clean');
          if ($this->form_validation->run() == FALSE) {
            //Registro fallido
            $menu['activo']="inicio";
            $title['title']="Alta usuario - Mare Nostrum";
            $this->load->view('head', $title);
            $this->load->view('cabecera', $menu);
            $this->load->view('altausuario');
          } else {
            //Registro correcto
            redirect(base_url().'Inicio/index');
          }
        } else {
          redirect(base_url().'Inicio/index');
        }
      }
    }

    public function miperfil(){
      if (isset($_SESSION['logged_in'])) {
          $id = $_SESSION['logged_in']['id'];
          $nombre = $_SESSION['logged_in']['nombre'];
          $group = $_SESSION['logged_in']['group'];
          $menu['activo']="inicio";
          $title['title']="Mi perfil";
          $this->load->view('head', $title);
          $this->load->view('cabecera', $menu);
          $data = $this->UM_Users->selectuser($id);
          $data_user['data_user'] = array(
            'iduser' => $data->id,
            'nombreusu' => $data->nombre,
            'group' => $data->group,
          );
          $this->load->view('miperfil', $data_user);
          // if ($this->UM_Cursos->selectCursosUser($id)) {
          //   $cursos_user['cursos'] = $this->UM_Cursos->selectCursosUser($id);
          //   $this->load->view('listado_cursos', $cursos_user);
          // } else {
          //   $this->load->view('listado_cursos');
          // }
          // if ($this->UM_Cursos->selectCursosProf($nombre) && $group === "Profesor") {
          //   $cursos_prof['cursos_prof'] = $this->UM_Cursos->selectCursosProf($nombre);
          //   $this->load->view('listado_cursos_prof', $cursos_prof);
          // }
      } else {
          redirect(base_url().'Inicio/index');
      }
    }

    public function editarperfil(){
      if (isset($_SESSION['logged_in'])) {
          $id = $_SESSION['logged_in']['id'];
          $menu['activo']="inicio";
          $title['title']="Mi perfil";
          $this->load->view('head', $title);
          //$this->load->view('cabecera', $menu);
          $data = $this->UM_Users->selectuser($id);
          $data_user['data_user'] = array(
            'iduser' => $data->id,
            'nombreusu' => $data->nombreusu,
            'group' => $data->group
          );
          $this->form_validation->set_rules('user', 'NombreUsuario','trim|required|xss_clean');
          $this->form_validation->set_rules('group', 'Grupo','trim|required|xss_clean');
          $this->form_validation->set_rules('password', 'password','trim|required|xss_clean');
          $this->form_validation->set_rules('password2', 'password2','trim|required|xss_clean');
          $this->load->view('editarperfil', $data_user);
          // if ($this->UM_Cursos->selectCursosUser($id)) {
          //   $cursos_user['cursos'] = $this->UM_Cursos->selectCursosUser($id);
          //   $this->load->view('listado_cursos', $cursos_user);
          // } else {
          //   $this->load->view('listado_cursos');
          // }
      } else {
          redirect(base_url().'Inicio/index');
      }
    }

    public function actualizaUsuario(){
      $user_act = array(
        'id_user' => $_SESSION['logged_in']['id'],
        'nombre' => $_SESSION['logged_in']['nombre'],
        'group' => $this->input->post('group'),
        'password' => hash('sha256', $this->input->post('password'))
      );

      if ($this->UM_Users->upduser($user_act)) {
        redirect(base_url().'User/miperfil');
      } else {
        redirect(base_url().'User/editarperfil');
      }
    }


  }
?>
