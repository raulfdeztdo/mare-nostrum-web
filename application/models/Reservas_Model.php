<?php
  class Reservas_Model extends CI_Model {

    var $id;
    var $nombrecli;
    var $fechaini;
    var $fechafin;
    var $iduser;
    var $idap;

    public function __construct () {
        parent :: __construct ();
    }

    public function getAll() {
        $query = $this->db->get('reservas_ap');
        return $query->result();
    }

    public function getLast5() {
        $fechaHoy = date("Y-m-d");
        $this->db->order_by('idres', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get('reservas_ap');
        $rows = $query->result();
        for ($i=0; $i < count($rows) ; $i++) {
          if ($rows[$i]->fechafin < $fechaHoy){
            $rows[$i]->estado = "Completada";
          } elseif ($rows[$i]->fechaini <= $fechaHoy && $rows[$i]->fechafin >= $fechaHoy){
            $rows[$i]->estado = "En curso";
          } elseif ($rows[$i]->fechaini > $fechaHoy) {
            $rows[$i]->estado = "Pendiente";
          }
          $rows[$i]->fechaini = date("d-m-Y", strtotime($rows[$i]->fechaini));
          $rows[$i]->fechafin = date("d-m-Y", strtotime($rows[$i]->fechafin));
        }
        return $rows;
    }

    public function updapar($res_act){
      $this->db->where('idres', $res_act['idres']);
      $this->db->update('reservas_ap',$res_act);
			return true;

    }

    public function selectap($id) {
      $this->db->select('*');
      $this->db->from('reservas_ap');
      $this->db->where('idres', $id);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        $rows = $query->result();
        $this->id = $rows[0]->idres;
        $this->nombrecli = $rows[0]->nombrecli;
        $this->fechaini = $rows[0]->fechaini;
        $this->fechafin = $rows[0]->fechafin;
        $this->idap = $rows[0]->idap;

        return $this;
      }
      return FALSE;
    }

    public function creareserva($res) {
      $this->db->insert('reservas_ap', $res);
      return $this->db->affected_rows() > 0;
    }

    public function selectResFechas($fecha1, $fecha2){
      $this->db->select('*');
      $this->db->from('reservas_ap');
      $this->db->where('fechafin <=',date('Y-m-d',$fecha1));
      $this->db->where('fechaini >=',date('Y-m-d',$fecha2));
      return $this->db->get();
      if ($query->num_rows() > 0) {
        return $query->result();;
      }
      return FALSE;
    }

  }
?>
