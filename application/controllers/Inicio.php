<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('Usuarios_Model', 'UM_Users'); //Carga el modelo
		}

	public function index() {
		$menu['activo']="inicio";
		$title['title']="Inicio - Mare Nostrum";
		$this->load->view('head', $title);
		 $this->load->view('cabecera');
		// if (isset($_SESSION['logged_in'])) {
		// 	$this->load->view('login_correct');
		// } else {
		// 	$this->load->view('login');
		// }
		// $datos2['ultimos3']=$this->UM_Cursos->ultimos3();
		 $this->load->view('index');
		// $this->load->view('footer');
	}
}
