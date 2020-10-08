<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('Cursos_Model', 'UM_Cursos'); //Carga el modelo
		}

	public function index() {
		$menu['activo']="inicio";
		$title['title']="Inicio";
		$this->load->view('head', $title);
		/*$this->load->view('cabecera', $menu);
		if (isset($_SESSION['logged_in'])) {
			$this->load->view('login_correct');
		} else {
			$this->load->view('login');
		}
		$datos2['ultimos3']=$this->UM_Cursos->ultimos3();
		$this->load->view('index', $datos2);
		$this->load->view('footer');*/
	}
}
