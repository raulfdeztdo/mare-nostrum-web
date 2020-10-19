<?php
  class Apartamentos_Model extends CI_Model {

    var $id;
    var $nombre;
    var $descripcion;
    var $precio;
    var $preciotachado;
    var $habitaciones;
    var $habitacionesdobles;
    var $wc;
    var $oferta;

    public function __construct () {
        parent :: __construct ();
    }

    public function getAll() {
        $query = $this->db->get('apartamentos');
        return $query->result();
    }

    public function getLast5() {
        $this->db->order_by('idap', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get('apartamentos');
        return $query->result();
    }

    public function updapar($ap_act){
      $this->db->where('idap', $ap_act['idap']);
      $this->db->update('apartamentos',$ap_act);
			return true;

    }

    public function selectap($id) {
      $this->db->select('*');
      $this->db->from('apartamentos');
      $this->db->where('idap', $id);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        $rows = $query->result();
        $this->id = $rows[0]->idap;
        $this->nombre = $rows[0]->nombre;
        $this->descripcion = $rows[0]->descripcion;
        $this->precio = $rows[0]->precio;
        $this->preciotachado = $rows[0]->preciotachado;
        $this->habitaciones = $rows[0]->habitaciones;
        $this->habitacionesdobles = $rows[0]->habitacionesdobles;
        $this->wc = $rows[0]->wc;
        $this->oferta = $rows[0]->oferta;

        return $this;
      }
      return FALSE;
    }

    public function creaapartamento($apar) {
      $this->db->insert('apartamentos', $apar);
      return $this->db->affected_rows() > 0;
    }

    public function selectHabitaciones($hab){
      $this->db->select('*');
      $this->db->from('apartamentos');
      $this->db->where('habitaciones', $hab);
      $query = $this->db->get();
      if ($query->num_rows() > 0) {
        return $query->result();;
      }
      return FALSE;
    }

  }
?>
