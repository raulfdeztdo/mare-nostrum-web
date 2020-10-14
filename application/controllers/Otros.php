<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otros extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('Usuarios_Model', 'UM_Users'); //Carga el modelo
		}

	public function localizacion() {
		$menu['activo']="inicio";
		$title['title']="Localización - Mare Nostrum";
		$this->load->view('head', $title);
		 $this->load->view('cabecera');
		 $this->load->view('localizacion');
	}

  public function contacto() {
    $menu['activo']="inicio";
    $title['title']="Contacto - Mare Nostrum";
    $this->load->view('head', $title);
     $this->load->view('cabecera');
    // if (isset($_SESSION['logged_in'])) {
    // 	$this->load->view('login_correct');
    // } else {
    // 	$this->load->view('login');
    // }
    // $datos2['ultimos3']=$this->UM_Cursos->ultimos3();
     $this->load->view('index');
     $this->load->view('footer');
  }

  public function sobrenosotros() {
    $menu['activo']="inicio";
    $title['title']="Contacto - Mare Nostrum";
    $this->load->view('head', $title);
     $this->load->view('cabecera');
    // if (isset($_SESSION['logged_in'])) {
    // 	$this->load->view('login_correct');
    // } else {
    // 	$this->load->view('login');
    // }
    // $datos2['ultimos3']=$this->UM_Cursos->ultimos3();
     $this->load->view('index');
     $this->load->view('footer');
  }
}
