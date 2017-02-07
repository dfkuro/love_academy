<?php

class AdminModel extends CI_Model {



  /**
   * [login Realizar la comprobacion de las credenciales que el usuario haya enviado]
   * @param  [type] $username [Nombre del usuario que se va a logear]
   * @param  [type] $password [Contrasena del usuario]
   * @return [type]           [regresa los datos obtenidos de la consulta]
   */
  function userValidation( $user, $password ){

    // $this->db->trans_start();
    // $this->db->trans_complete();
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('email', $user);
    $this->db->where('password', $password);
    $this->db->where('status', 1);

    $query = $this->db->get();

    if( $query->num_rows() > 0 ){

      $userdata = $query->result_array()[0];
      $userdata{'logged_in'} = true;
      return $userdata;

    } else {
      return 'error';
    }

  }



}