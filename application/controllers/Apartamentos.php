<?php
  class Admin extends CI_Controller {

    public function __construct() {       // Define el constructor
      parent::__construct();              // Invoca al constructor de la clase superior
      $this->load->model('Apartamentos_Model', 'UM_Ap'); //Carga el modelo

    }

    public function index(){

    }


  }
?>
