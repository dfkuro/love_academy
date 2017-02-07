<?php

class LacModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }


  /**
   * [userValidation User credentials validation]
   * @param  [type] $email    [Use the user's email for login]
   * @param  [type] $password [This use SHA1 to encrypt the data]
   * @return [type]           [User data]
   */
  function userValidation( $email, $password ){

    // Buscaremos en la tabla de usuarios para buscar las credenciales
    $this->db->where('email', $email);
    $this->db->where('password', $password);

    $query = $this->db->get('user');

    // Si encontramos un dato de tipo de usuario, regresamos los datos si no, realizaremos una nueva busqueda para el teacher.
    if( $query->num_rows() > 0 ){
      $userdata = $query->result_array()[0];
      $userdata{'logged_in'} = true;
      $userdata{'type'} = 'user';
      return $userdata;
    } else {

      $this->db->where('email', $email);
      $this->db->where('password', $password);

      $query2 = $this->db->get('teacher');

      if( $query2->num_rows() > 0 ){
        $userdata = $query2->result_array()[0];
        $userdata{'logged_in'} = true;
        $userdata{'type'} = 'teacher';
        return $userdata;
      } else {
        return 'error';
      }

    }

  }







  function getTeachersHealers( $id_th, $limit ) {

    $this->db->select('id, name, bio, avatar, last_name');  
    
    $this->db->from('teacher');
    //$this->db->where('status', 1);
    if( $id_th > 0 ) {
      $this->db->where('id', $id_th);
    } else {
      $this->db->order_by('id', 'RANDOM');
    }
    
    $this->db->limit( $limit );

    $users = $this->db->get();
    return $users->result_array();
  }

  function getExperienciesWorkshop( $limit ) {

    $this->db->select('ex.*, te.name, te.id as teacher_id');
    $this->db->from('experience ex');
    $this->db->join('teacher te', 'ex.teacher_id = te.id', 'left');
    $this->db->order_by('ex.id', 'RANDOM');
    $this->db->limit( $limit );

    $experiences = $this->db->get();

    return $experiences->result_array();
  }


  function dataExperience( $id_experience ) {

    $this->db->select('*');
    $this->db->from('experience');
    $this->db->where('id', $id_experience);

    $experiences = $this->db->get();

    return $experiences->result_array();
  }



  function clean_text($string) {
     $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
     return preg_replace('/[^A-Za-z0-9\_]/', '', $string); // Removes special chars.
  }

}