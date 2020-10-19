<?php
  class Mensajes_Model extends CI_Model {

    var $id;
    var $nombrecli;
    var $apellidos;
    var $fechamsg;
    var $msg;
    var $idap;
    var $leido;

    public function __construct () {
        parent :: __construct ();
    }

    public function getAll() {
        $query = $this->db->get('mensajes');
        return $query->result();
    }


    public function updapar($msg_act){
      $this->db->where('idmsg', $msg_act['idmsg']);
      $this->db->update('mensajes',$msg_act);
			return true;

    }

    public function selectmsg($id) {
      $this->db->select('*');
      $this->db->from('mensajes');
      $this->db->where('idmsg', $id);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        $rows = $query->result();
        $this->id = $rows[0]->idmsg;
        $this->nombrecli = $rows[0]->nombrecli;
        $this->apellidos = $rows[0]->apellidos;
        $this->fechamsg = $rows[0]->fechamsg;
        $this->msg = $rows[0]->msg;
        $this->idap = $rows[0]->idap;
        $this->leido = $rows[0]->leido;

        return $this;
      }
      return FALSE;
    }

    public function creamsg($msg) {
      $this->db->insert('mensajes', $msg);
      return $this->db->affected_rows() > 0;
    }

    public function selectMsgFechaa($fecha){
      $this->db->select('*');
      $this->db->from('mensajes');
      $this->db->where('fechamsg =',date('Y-m-d',$fecha));
      return $this->db->get();
      if ($query->num_rows() > 0) {
        return $query->result();;
      }
      return FALSE;
    }

    public function selectNoLeidos(){
      $this->db->select('*');
      $this->db->from('mensajes');
      $this->db->where('leido', '0');
      $this->db->order_by('idmsg', 'DESC');
      $query = $this->db->get();
      if ($query->num_rows() > 0) {
        return $query->result();;
      }
      return FALSE;
    }

  }
?>
