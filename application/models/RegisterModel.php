<?php

class RegisterModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }


  /**
   * [register_user Permite ingresar los datos a la base de datos para el usuario normal]
   * @return [type] [description]
   */
  public function registerUser( $datos_user ){

    $this->db->where('email', $datos_user['email']);
    $query = $this->db->get('user');

    $count_row = $query->num_rows();


    if ($count_row > 0) {
      $response['response'] = 'error';
      $response['error'] = 'The email is already in use.';
      return $response;
     } else {
        $this->db->where('email', $datos_user['email']);
        $query = $this->db->get('teacher');

        $count_row_teacher = $query->num_rows();


        if ($count_row_teacher > 0) {
          $response['response'] = 'error';
          $response['error'] = 'The email is already in use.';
          return $response;
        } else {

          $this->db->trans_start();
          $response = array();
          $this->db->insert('user', $datos_user);
          $response['id'] = $this->db->insert_id();
          $this->db->trans_complete();

          if($this->db->trans_status() === FALSE){
            $response['response'] = 'error';
            $response['error'] = $this->db->error();
            return $response;
          }else {
            $response['response'] = 'ok';
            $response['error'] = '';
            return $response;
          }
          
        }
     }

  }

  public function editUser( $datos_user ) {
    $this->db->trans_start();
    $response = array();
    $id_user =  $datos_user['id'];
    unset($datos_user['id']);
    
    $this->db->where('id', $id_user);
    $this->db->update('user', $datos_user);

    $this->db->trans_complete();

    if($this->db->trans_status() === FALSE){
      $response['response'] = 'error';
      $response['error'] = $this->db->error();
      return $response;
    }else {
      $response['response'] = 'ok';
      $response['error'] = '';
      return $response;
    }
  }


  public function registerTeacher( $datos_teacher ){

    $this->db->where('email', $datos_teacher['email']);
    $query = $this->db->get('user');

    $count_row = $query->num_rows();


    if ($count_row > 0) {
      $response['response'] = 'error';
      $response['error'] = 'The email is already in use.';
      return $response;
    } else { 
      $this->db->where('email', $datos_teacher['email']);
      $query = $this->db->get('teacher');

      $count_row_teacher = $query->num_rows();

      if ($count_row_teacher > 0) {
        $response['response'] = 'error';
        $response['error'] = 'The email is already in use.';
        return $response;
      } else {

          $this->db->trans_start();
          $response = array();
          $this->db->insert('teacher', $datos_teacher);
          $response['id'] = $this->db->insert_id();
          $this->db->trans_complete();

          if($this->db->trans_status() === FALSE){
            $response['response'] = 'error';
            $response['error'] = $this->db->error();
            return $response;
          }else {
            $response['response'] = 'ok';
            $response['error'] = '';
            return $response;
          }
          
        }
      }

    } 



    public function editTeacher( $datos_teacher ) {
      $this->db->trans_start();
      $response = array();
      $id_teacher =  $datos_teacher['id'];
      unset($datos_teacher['id']);
      
      $this->db->where('id', $id_teacher);
      $this->db->update('teacher', $datos_teacher);

      $this->db->trans_complete();

      if($this->db->trans_status() === FALSE){
        $response['response'] = 'error';
        $response['error'] = $this->db->error();
        return $response;
      }else {
        $response['response'] = 'ok';
        $response['error'] = '';
        return $response;
      }
    }


}