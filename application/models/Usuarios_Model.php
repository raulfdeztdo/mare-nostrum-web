<?php
  class Usuarios_Model extends CI_Model {

    var $id;
    var $nombre;
    var $group;

    public function __construct ()
    {
        parent :: __construct ();
    }

    public function getAll ()
    {
        $query = $this->db->get('usuarios');
        return $query->result();
    }

    public function authenticate($user, $password){
      $this->db->select('iduser, nombreusu, group');
      $this->db->from('usuarios');
      $this->db->where('nombre', $user);
      $this->db->where('password', hash('sha256', $password));
      //$this->db->where('password', hash('sha256', $password));
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        $rows = $query->result();
        $this->id = $rows[0]->iduser;
        $this->nombre = $rows[0]->nombreusu;
        if ($rows[0]->group == "1") {
          $this->group = "Admin";
        } else {
          $this->group = "Default";
        }
        return $this;
      }
      return FALSE;
    }

    public function upduser($user_act){

      $this->db->where('iduser', $user_act['iduser']);
      $this->db->update('usuarios',$user_act);
			return true;

    }

    public function selectuser($id){
      $this->db->select('iduser, nombreusu, group');
      $this->db->from('usuarios');
      $this->db->where('iduser', $id);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        $rows = $query->result();
        $this->id = $rows[0]->iduser;
        $this->nombre = $rows[0]->nombreusu;
        if ($rows[0]->group == "1") {
          $this->group = "Admin";
        } else {
          $this->group = "Default";
        }

        return $this;
      }
      return FALSE;
    }

    public function creauser($user){
      $this->db->insert('usuarios', $user);
      return $this->db->affected_rows() > 0;
    }

    public function checkNombreUsuario($usuario){
      $this->db->select('*');
      $this->db->from('usuarios');
      $this->db->where('nombreusu', $usuario);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        return TRUE;
      }
      return FALSE;
    }

  }
?>
